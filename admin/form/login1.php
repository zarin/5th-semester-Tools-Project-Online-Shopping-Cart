<?php
 $con = mysqli_connect('localhost','root','','ecommerce');

 $A_name = $_POST['username'];
 $A_mail = $_POST['mail'];
 $A_password = $_POST['userpassword'];

 $result = mysqli_query($con,"SELECT * FROM `admin` WHERE username='$A_name'AND mail='$A_mail'AND userpassword='$A_password'");

 session_start();
 if(mysqli_num_rows($result))
 {

    $_SESSION['admin']=$A_name;

     echo"
        <script>
        alert('Login successfully');
        window.location.href='../mystore.php';
        </script>
     ";
 }
 else
 {
    echo"
    <script>
    alert('Invalid Mail Id or Password');
    window.location.href='login.php';
    </script>
 ";
 }
 ?>