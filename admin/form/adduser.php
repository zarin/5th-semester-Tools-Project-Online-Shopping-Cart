<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Page</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
      <div class="row">
          <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace">
          <p class="text-success text-center fs-3 fw-bold my-3">Add User</p>
          <form action="userinsert.php" method="POST">
              <div class="mb-3">
                  <label for="">User Name</label>
                  <input type="text" name="username"placeholder="Enter User Name"class="form-control"required>
              </div>
              <div class="mb-3">
                  <label for="">User E-mail</label>
                  <input type="email" name="mail" placeholder="Enter User E-mail"class="form-control"required>
              </div>
              <div class="mb-3">
                  <label for="">User Phone Number</label>
                  <input type="text"name="number"placeholder="Enter User Phone Number"class="form-control"required>
              </div>
              <div class="mb-3">
                  <label for="">User Password</label>
                  <input type="password"name="password"placeholder="Enter User Password"class="form-control"required>
              </div>
              <div class="mb-3">
              <button name="send" class="w-100 bg-success fs-4 fw-bold form-control text-white">ADD USER</button>
              </div>
              
          </form>
          </div>
      </div>  
    </div>  
    
</body>
</html>