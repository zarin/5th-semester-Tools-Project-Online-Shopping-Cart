  <?php 
   if(isset($_POST['update']))
   {
        include ('config.php');
        $id=$_POST['Id'];
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_image = $_FILES['PImage'];
        $image_loc = $_FILES['PImage']['tmp_name'];
        $image_name = $_FILES['PImage']['name'];
        $img_des = "Uploadimage/".$image_name;
        
        move_uploaded_file($image_loc,"Uploadimage/".$image_name);    
        $product_category = $_POST['PCategory'];
      
        
        mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`=' $img_des',`PCategory`=' $product_category' WHERE Id='$id' ");
   
        header("location:index.php");
   }
    ?>  
    
