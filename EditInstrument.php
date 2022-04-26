<?php

echo '<pre>';

print_r($_POST);


//connect to the database
include 'library/DBConnection.php';

// set up the sql string with prepared statements
$sql = "UPDATE instrument 
        SET name=?, 
            category=?, 
            description=?, 
            price=?  
        WHERE id=?";

//set up the variables
$id = $_POST["id"];
$name = $_POST["name"];
$category = $_POST["category"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];

$stmt= $conn->prepare($sql);


    $stmt->bind_param("sssii",  $name, $category, $description, $price, $id);

    $stmt->execute();
    $conn->close();



echo '<pre>';

print_r($conn);
echo '</pre>';

//redirect back to index page
header("Location: index.php");


?>