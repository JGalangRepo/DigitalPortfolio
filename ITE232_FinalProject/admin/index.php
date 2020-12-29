<?php
  include './includes/connection.php';
  if(!isset($_SESSION['username'])){
    echo "<script>alert('Login first to view the content!'); location.href='login.php';</script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://use.fontawesome.com/092e98dd01.js"></script>

    <title> Home </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ml-auto " href="#">My Digital Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=
    "#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#00000"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-3">
          <a class="nav-link active"href="#"><i class="fa fa-home"></i>&nbsp; Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><i class="fa fa-image"></i>&nbsp; Gallery</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#"><i class="fa fa-envelope"></i>&nbsp; Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-3 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php include './includes/current_user.php'; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="fa fa-user-circle">&nbsp; Edit Profile</i></a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-lock">&nbsp; Edit Password</i></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./includes/logoutfunction.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp; Log Out</i></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>