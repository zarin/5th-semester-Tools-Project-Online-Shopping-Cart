<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User Header</title>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
      </head>
    <body>
      <?php
      session_start();
      $count=0;
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
      }
      ?>
    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand text-warning pb-2"><h1>My Store</h1></a>
    <div class="d-flex">
    <a href="home.php"class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home |</a>
    <a href="viewcart.php"class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>) |</a>
    <span class="text-warning pe-2">
        <i class="fas fa-user-shield"></i>Hello |
        <a href="" class="text-warning text-decoration-none pe-2"><i class="fas fa-sign-in-alt"></i>Login |</a>
        <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-user-shield"></i>Admin</a>
</span>
</div>
</nav>
</div>
    <div class="bg-success sticky-top font-monospace">     
    <ul class="list-unstyled d-flex justify-content-center">
    <li><a href="gents.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Gents</a></li>
    <li><a href="ladies.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Ladies</a></li>
    <li><a href="kids.php" class="text-decoration-none text-white fw-bold fs-4 px-5 ">Kids</a></li>
</ul>
</div>
</body>
</html>