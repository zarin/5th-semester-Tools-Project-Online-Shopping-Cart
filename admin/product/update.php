<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update Page</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<?php
$id=$_GET['Id'];
include ('config.php');
error_reporting(0);
$Record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE Id = $id ");
$data=mysqli_fetch_array($Record);
?>

<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-success mt-3">
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
<div class="mb-3">
  <label class="form-label">Add Product Image</label>
  <input type="file" name="PImage" class="form-control"><br>
  <img src="<?php echo $data['PImage']?>"alt=""style="height:100px;">
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
<input type="text" name="Id" value="<?php echo $data['Id']?>">
<button name="update" class="bg-success fs-4 fw-bold my-3 form-control text-white">Update</button> 
</form>
</div>
</div>
</div>

    <!-- php update code -->
    <?php
    if($_GET['update']){
        $id=$_POST['Id'];
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_image = $_FILES['PImage'];
        $image_loc = $_FILES['PImage']['tmp_name'];
        $image_name = $_FILES['PImage']['name'];
        $img_des = "Uploadimage/".$image_name;
        
        move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    
        $product_category = $_POST['PCategory'];

        include ('config.php');
        error_reporting(0);
        mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`=' $img_des',`PCategory`=' $product_category' WHERE Id='$id' ");
        header("location:index.php");

    }
    ?>

</body>