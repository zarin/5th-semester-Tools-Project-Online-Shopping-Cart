<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Product Page</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-success mt-3">
<form action="insert.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-success">Product Detail:</p>
</div>
<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" name="PName" class="form-control" placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" name="PPrice" class="form-control" placeholder="Enter Product Price">
</div>
<div class="mb-3">
  <label class="form-label">Add Product Image</label>
  <input type="file" name="PImage" class="form-control">
</div>
<div class="mb-3">
  <label class="form-label">Select Page Category</label>
  <select class="form-select" name="PCategory">
  <option value="Home">Home</option>
  <option value="Gents">Gents</option>
  <option value="Ladies">Ladies</option>
  <option value="Kids">Kids</option>
</select>
</div>
<button name="submit" class="bg-success fs-4 fw-bold my-3 form-control text-white">Upload</button> 
</form>
</div>
</div>
</div>
<!-- fetch data -->
<div class="container">
<div class="row">
<div class="col-md-10 m-auto">
<table class="table table-striped table-hover border border-warning my-5">
<thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>
<tbody class="text-center">
<?php

include 'config.php';
$Record = mysqli_query($con,"SELECT * FROM `tblproduct` ");

      while($row = mysqli_fetch_array($Record))
      echo"
      <tr>
      <td>$row[Id]</td>
      <td>$row[PName]</td>
      <td>$row[PPrice]</td>
      <td><img src='$row[PImage]' height='90px' width='200px'></td>
      <td>$row[PCategory]</td>
      <td><a href='' class='btn btn-danger'>Delete</a></td>
      <td><a href='updateindex.php? Id=$row[Id]' class='btn btn-warning'>Update</a></td>
    </tr>

      ";
?>
</tbody>
</table>
</div>
</div> 
</div>
</body>
</html>