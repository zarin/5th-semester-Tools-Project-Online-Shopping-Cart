<?php 
   if(Isset($_POST['update']))
   {
        include ('config.php');
        $id=$_POST['id'];
        $username = $_POST['username'];
        $mail = $_POST['mail'];
        $number = $_POST['number'];
       
      
        
        mysqli_query($con,"UPDATE `tbluser` SET `username`='$username',`mail`='$mail',`number`=' $number' WHERE id=$id ");
   
        header("location:adduserlist.php");
   }
?>  