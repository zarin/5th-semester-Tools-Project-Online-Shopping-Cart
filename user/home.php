<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User Home Page</title>
         <!-- <link rel="stylesheet"href="background_img.css">    -->
        <?php
        include 'header.php';
        ?>
    </head>
    <body class="bg">
      <div class="container">
        <div class="col-md-12">
        <div class="row">
        <h1 class="text-warning font-monospace text-center fw-bold my-2">Home</h1>
        <?php
        include 'config.php';
        $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");
        
          while ($row = mysqli_fetch_array($Record))
          {
            $check_page = $row['PCategory'];
            if($check_page =='Home')
            { 
    echo "
    <div class='col-md-6 col-lg-4 m-auto my-2'>
    <form action = 'insertcart.php' method='POST'>
    <div class='card' style='width: 20rem;height:27.5rem;'>
    <img src='../admin/product/$row[PImage]' class='card-img-top m-auto'style='width:318px;height:225px;'>
    <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'><b>৳</b> $row[PPrice]/-</p>
    <input type='hidden' name='PName' value='$row[PName]'>
    <input type='hidden' name='PPrice' value='$row[PPrice]'>
    <input type='number' name='PTotal' min='1' max='99' placeholder ='  Total'><br><br>
    <input type='submit'name='addCart' class='btn btn-danger text-white w-100' value='Add to Cart'>
  </div>
</div>
</form>
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