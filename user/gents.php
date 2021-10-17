<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Gents</title>
        <?php
        include 'header.php';
        ?>
    </head>
    <body>
      <div class="container">
        <div class="col-md-12">
        <div class="row">
        <h1 class="text-warning font-monospace text-center fw-bold my-2">Gents</h1>
        <?php
        include 'config.php';
        $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");
          while ($row = mysqli_fetch_array($Record))
          {
            $check_page = $row['PCategory'];
            if($check_page =='Gents')
            { 
    echo "
    <div class='col-md-6 col-lg-4 m-auto my-2'>
    <div class='card' style='width: 18rem;'>
    <img src='../admin/product/$row[PImage]' class='card-img-top'>
    <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>Price: $row[PPrice]</p>
    <input type='number' min='1' max='99' placeholder='Total'><br><br>
    <input type='submit' class='btn btn-danger text-white w-100' value='Add to Cart'>
  </div>
</div>
</div>
";
}
}
?>
</div>
</div>
</div>
</body>
</html>