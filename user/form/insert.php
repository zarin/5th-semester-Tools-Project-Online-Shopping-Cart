<?php

$con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $number=$_POST['number'];
    $password=$_POST['password'];


    $dup_mail=mysqli_query($con,"SELECT `id`, `username`, `mail`, `number`, `password` FROM `tbluser` WHERE mail='$mail'");

    $dup_username=mysqli_query($con,"SELECT `id`, `username`, `mail`, `number`, `password` FROM `tbluser` WHERE username='$name'");

   
    if(mysqli_num_rows($dup_mail)){
        echo"
        <script>
        alert('This E-mail is already Added');
        window.location.href='register,php';
        </script>
        ";
    }

    if(mysqli_num_rows($dup_username)){
        echo"
        <script>
        alert('This User Name is already Added');
        window.location.href='register.php';
        </script>
        ";
    }

    else{
        mysqli_query($con,"INSERT INTO `tbluser`(`username`, `mail`, `number`, `password`) VALUES ('$name','$mail','$number','$password')");
    }
}
?>