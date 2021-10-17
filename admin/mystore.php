<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin home-page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>My Store</h1></a>
    <span>
    <i class="fas fa-user-shield"></i>
    <a class="text-decoration-none text-white px-1">Hello <?php echo $_SESSION['admin'];?> |</a>
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-white px-1">Logout |</a>
    <i class="fas fa-users"></i>
    <a href="" class="text-decoration-none text-white px-1">Userpanel</a> 
</span>
</div>
</nav>
<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-success text-center m-auto">
  <a href="product/index.php"class="text-decoration-none text-white fs-4 fw-bold px-5">Add Post</a>
  <a href=""class="text-decoration-none text-white fs-4 fw-bold px-5">Users</a>
</div>
</body>
</html>
