<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
 <header>
 <div class="navbar nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
     <a href="#" class="navbar-brand"> Developers</a>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">


  <?php
if (isset($_SESSION['userid'])) {
    echo '<a>
    <form method="post" action="includes/logout.inc.php">
    <button class="btn nav-btn" type="submit" name="logout">log Out</button>
    </form>
    </a>
    <a class="nav-link text-white" href="profile.php">edit profile</a>
    ';
}
else{
    echo ' <a class="nav-link" href="login.php">Log In</a>
      <a href="register.php">signup</a>';
}
?>
  </div>
</div>
 </header>