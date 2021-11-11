<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Login Page</title>
        <link rel="stylesheet"href="background_img.css">
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
<body class="bg">
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-success mt-5">
<form action="login1.php" method="POST">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-success">Admin Login</p>
</div>
<div class="mb-3">
  <label class="form-label"> User Name</label>
  <input type="text" name="username" class="form-control" placeholder="Enter User Name">
</div>
<div class="mb-3">
  <label class="form-label">Mail</label>
  <input type="text" name="mail" class="form-control" placeholder="Enter Mail Id">
</div>
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" name="userpassword" class="form-control" placeholder="Enter Password">
</div>
<button class="bg-success fs-4 fw-bold my-3 form-control text-white">Login</button> 
</form>
</div>
</div>
</div>
</body>
</html>