<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>User ViewCart Page</title>
        <link rel="stylesheet"href="background_img 1.css">
        <?php
        include 'header.php';
        ?>
    </head>
    <body class="bg">
        <div class="container">
            <div class="row">
               <!-- <div class="col-lg-12 text-center bg-light rounded mb-5">   -->
                    <h1 class="text-center text-white">My Cart</h1>
</div>
</div>
</div>
<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered text-center table-hover">
                <thead class="bg-success text-white fs-5">
                    <th>Serial No</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    $Ptotal_price= 0;
                    $total_price=0;
                    $index=0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key=> $value)
                        {
                            $Ptotal_price = $value['ProductPrice'] * $value['ProductTotal'];
                            $total_price += $value['ProductPrice'] * $value['ProductTotal'];
                            $index = $key+1;
                            echo "
                            <form action = 'insertcart.php' method='POST'>
                            <tr>
                            <td>$index</td>
                            <td><input type='hidden' name='PName' value='$value[ProductName]'>$value[ProductName]</td>
                            <td><input type='hidden' name='PPrice' value='$value[ProductPrice]'>$value[ProductPrice]</td>
                            <td><input type='text' name='PTotal' value='$value[ProductTotal]'style='width: 3rem;'></td>
                            <td> $Ptotal_price</td>
                            <td><button name='update' class='btn-info'>Update</button></td>
                            <td><button name='remove' class='btn-danger'>Delete</button></td>
                            <td><input type='hidden' name='item' value='$value[ProductName]'</td>
                            </tr>
                            </form>
                            ";
                        }
                    }
                    ?>
</tbody>
</table>
</div>
<div class="col-lg-3 text-center">
    <h3>Total Price</h3>
    <h1 class="bg-success text-white"><?php echo number_format($total_price,2)?></h1>

</div>
</div>
</div>
</body>
</html>