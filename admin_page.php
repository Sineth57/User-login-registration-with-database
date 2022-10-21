<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

 
   <link rel="stylesheet" href="style.css">

</head>
<body style="background-image: url('pexels-pixabay-207247.jpg');">
   
<div class="container">

   <div class="content">
      <h3>Hello, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
      <br>
      <br>
      <br>
      <a href="/mydatabase4/index.php" class="btn">Add New User/Information</a>
   </div>
   
</div>

</body>
</html>