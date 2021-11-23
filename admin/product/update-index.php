<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update Page</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
  
<?php
include ('config.php');
$Id=$_GET["Id"];
$Record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE Id = $Id ");
$data=mysqli_fetch_array($Record);
?> 

<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto border border-success mt-5">
<form action="update.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-success">Product Update:</p>
</div>
<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" value="<?php echo $data['PName']?>" name="PName" class="form-control" placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" value="<?php echo $data['PPrice']?>" name="PPrice" class="form-control" placeholder="Enter Product Price">
</div>
<input type="hidden" name="Id" value="<?php echo $data['Id']?>">
<button name="update" class="bg-success fs-4 fw-bold my-3 form-control text-white">Update</button> 
</form>
</div>
</div>
</div>
</body>
</html>