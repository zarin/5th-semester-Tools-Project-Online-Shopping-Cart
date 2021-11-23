<?php
echo $id=$_GET['id'];
include 'config.php';
mysqli_query($con,"DELETE FROM `tbluser` WHERE id=$id");
header("location:adduserlist.php");

?>