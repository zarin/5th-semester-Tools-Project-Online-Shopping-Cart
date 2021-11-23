<?php 
   if(Isset($_POST['update']))
   {
        include ('config.php');
        $Id=$_POST['Id'];
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
      
        
        mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price' WHERE Id=$Id ");
   
        header("location:index.php");
   }
?>  