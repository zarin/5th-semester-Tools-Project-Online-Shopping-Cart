<?php
$username=$_POST['username'];
$mail=$_POST['mail'];
$password=$_POST['password'];

$con = mysqli_connect('localhost','root','','ecommerce');
$result=mysqli_query($con ,"SELECT * FROM `tbluser` WHERE (username='$username'AND mail='$mail'AND  password='$password')");

session_start();

if(mysqli_num_rows($result)){
    $_SESSION['user']=$username;


    echo"
        <script>
        alert('Login Successfully');
        window.location.href='../home.php';
        </script>
        ";
}
else{
    echo"
        <script>
        alert('Incorrect Username or E-mail or Password');
        window.location.href='login.php';
        </script>
        ";

}
?>