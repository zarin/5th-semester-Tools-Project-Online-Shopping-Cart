<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Product Page</title>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
    <?php
    session_start();
    if(!$_SESSION['admin'])
    {
      header("location:form/login.php");
    }
    ?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-warning">
    <a class="navbar-brand text-warning"><h1>My Store</h1></a>
    <span>
    <i class="fas fa-user-shield"></i>
    <a class="text-decoration-none text-warning px-1">Hello <?php echo $_SESSION['admin'];?> |</a>
    <i class="fas fa-align-justify"></i>
    <a href="../mystore.php" class="text-decoration-none text-warning px-1">Dashboard |</a>
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-warning px-1">Logout |</a>
    <i class="fas fa-users"></i>
    <a href="../../user/home.php" class="text-decoration-none text-warning px-1">Userpanel</a> 
</span>
</div>
</nav>
<div>
  <h2 class="text-center fw-bold px-5 py-3">User List</h2>
</div>

<!-- fetch data -->
<div class="container">
<div class="row">
<div class="col-md-10 m-auto">
<table class="table table-striped table-hover border border-warning my-5">
<thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>User Name</th>
    <th>User E-mail</th>
    <th>Phone Number</th>
</thead>
<tbody class="text-center">
<?php

include 'config.php';
$Record = mysqli_query($con,"SELECT * FROM `tbluser` ");

      while($row = mysqli_fetch_array($Record))
      echo"
      <tr>
      <td>$row[id]</td>
      <td>$row[username]</td>
      <td>$row[mail]</td>
      <td>$row[number]</td>
    </tr>

      ";
?>
</tbody>
</table>
</div>
</div> 
</div>
</body>
</html>