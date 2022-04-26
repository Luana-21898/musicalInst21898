<?php
include 'library/DBConnection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Music Store</title>
  </head>
  <body>
    <div class="container">
       <h1>Add New Instrument</h1>
       <form method="post" action="handlenewInstrument.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="forName" class="form-label">Instrument Name</label>
                <input type="text" class="form-control" id=""  name="name" aria-describedby="nameInput">
            </div>
            <div class="mb-3">
                <label for="forCategory" class="form-label">Category</label>
                <select class="form-select"  name="category" aria-label="Default select example">
                    <option selected>Select category</option>
                    <option value="String">String</option>
                    <option value="Wind">Wind</option>
                    <option value="Percussion">Percussion</option>
                    <option value="Microphone">Microphone</option>
                    <option value="Accessories">Accessories</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="forDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id=""  name="description" aria-describedby="descriptionInput">
            </div>
            <div class="mb-3">
                <label for="forPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id=""  name="price" aria-describedby="priceInput">
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

