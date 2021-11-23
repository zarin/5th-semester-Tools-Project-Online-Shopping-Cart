<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update Page</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
  
<?php
include ('config.php');

$id=$_GET["id"];
$Record=mysqli_query($con,"SELECT * FROM `tbluser` WHERE id = $id ");
$row=mysqli_fetch_array($Record);

?>
    <div class="container">
      <div class="row">
          <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace">
          <p class="text-success text-center fs-3 fw-bold my-3">Add User</p>
          <form action="infoupdate.php" method="POST">
              <div class="mb-3">
                  <label for="">User Name</label>
                  <input type="text" value="<?php echo $row['username']?>" name="username"placeholder="Enter User Name"class="form-control"required>
              </div>
              <div class="mb-3">
                  <label for="">User E-mail</label>
                  <input type="email" value="<?php echo $row['mail']?>" name="mail" placeholder="Enter User E-mail"class="form-control"required>
              </div>
              <div class="mb-3">
                  <label for="">User Phone Number</label>
                  <input type="text" value="<?php echo $row['number']?>"name="number"placeholder="Enter User Phone Number"class="form-control"required>
              </div>
              <input type="hidden" name="id" value="<?php echo $row['id']?>">

              <div class="mb-3">
              <button name="update" class="w-100 bg-success fs-4 fw-bold form-control text-white">Update</button>
              </div>  
          </form>
          </div>
      </div>  
    </div>  
</body>
</html>
