<?php
if(isset($_POST['submit']))
{
    include 'config.php';
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_image = $_FILES['PImage'];
    $image_loc = $_FILES['PImage']['tmp_name'];
    $image_name = $_FILES['PImage']['name'];
    $img_des = "Uploadimage/".$image_name;
    
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);

    $product_category = $_POST['PCategory'];


    //insert product
    mysqli_query($con, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) 
    VALUES ('$product_name','$product_price','$img_des','$product_category')"); 
   
}
header("location:index.php");
?>
