<?php
include './insert.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Signup</title>
</head>
<style>
      .navbar{
        background-color: rgb(255, 255, 0);
        
      }.navbar-brand{
        color: black;
        font-size: 25px;
        font-weight: bolder;
      }
      .navbar ul li {
        color: black;
      }
      .navbar ul li a{
        color: black;
        font-size:20px;
      }
      .navbar ul li a:hover{
        color: red;
      }
    </style>
<body class="text-bg-dark" >
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Log</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signup.php">Signup</a>
</li>
       
       
    </div>
  </div>
</nav>
<h1 class="text-center mt-5">Register Your Account</h1>
<div class="container mt-5 mw-50">
<p><?php echo $alert??"";?></p>
<form action ="<?php echo $_SERVER['PHP_SELF']?>" method = "POST">
<p><?php echo $error??"";?></p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="first_name" value="<?php echo $firstname??"";?>" class="form-control" id="first_name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" value="<?php echo $lastname??"";?>" id="last_name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="full_name" class="form-control" id="full_name" value="<?php echo $fullname??"";?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Designation</label>
    <input type="text " value="<?php echo $designation??"";?>" name="designation" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="email" value="<?php echo $email??"";?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address" value="<?php echo $address??"";?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Joining date</label>
    <input type="text" name="joining" value="<?php echo $joiningdate??"";?>" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name = "submit" id="submit" class="btn btn-primary">Signup</button>
</form>
</div>
</body>
</html>