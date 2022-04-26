<?php 
    include "library/DBConnection.php";

    $sql = "SELECT * FROM instrument WHERE id=".$_GET['id'];

    $result = $conn->query($sql);
    $instrument = $result->fetch_assoc();
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Musical Store</title>
  </head>
  <body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        <h3>Edit Musical Instrument</h3>
        <form action="EditInstrument.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="forName" class="form-label">Musical Name</label>
                <input  type="text" 
                        class="form-control" 
                        id="name"  
                        name="name" 
                        aria-describedby="nameHlep" 
                        value="<?= $instrument['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="forCategory" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" aria-describedby="categoryHelp" value="<?= $instrument['category'] ?>">
                    <option selected>Select category</option>
                    <option <?= ($instrument['category'] === 'String')? 'selected' : null ?> value="String">String</option>
                    <option <?= ($instrument['category'] === 'Wind')? 'selected' : null ?> value="Wind">Wind</option>
                    <option <?= ($instrument['category'] === 'Percussion')? 'selected' : null ?> value="Percussion">Shoes</option>
                    <option <?= ($instrument['category'] === 'Microphone')? 'selected' : null ?> value="Microphone">Microphone</option>
                    <option <?= ($instrument['category'] === 'Accessories')? 'selected' : null ?> value="Accessories">Accessories</option>
                </select>
            </div>            
            <div class="mb-3">
                <label for="forDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="description"  name="description" aria-describedby="descriptionHelp" value="<?= $instrument['description'] ?>">
            </div>
            <div class="mb-3">
                <label for="forPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="price"  name="price" aria-describedby="priceHelp" value="<?= $instrument['price'] ?>">
            </div>
            <div class="mb-3">
                <input type="file" name="image" id="imageToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Submit Instrument</button>
        </form>
    </div>

         




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>