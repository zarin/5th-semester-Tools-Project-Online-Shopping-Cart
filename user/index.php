<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User Home Page</title>
        <?php
        include 'header.php';
        ?>
    </head>
    <body>
      <div class="container">
        <div class="col-md-12">
        <div class="row">
        <h1 class="text-warning font-monospace text-center my-3">Home</h1>
        <?php
        include 'config.php';
        $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");
          while ($row = mysqli_fetch_array($Record))
          {
    echo "
    <div class='col-md-6 col-lg-4 m-auto my-2'>
    <div class='card' style='width: 18rem;'>
    <img src='../admin/product/$row[PImage]' class='card-img-top'>
    <div class='card-body'>
    <h5 class='card-title'>$row[PName]</h5>
    <p class='card-text'>Price: $row[PPrice]</p>
  </div>
</div>
</div>
";
}
?>
</div>
</div>
</div>
</body>
</html>