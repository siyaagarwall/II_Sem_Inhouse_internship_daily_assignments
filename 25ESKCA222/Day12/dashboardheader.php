<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
 }?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="https://img.magnific.com/premium-vector/eqh-logo-design-initial-letter-eqh-monogram-logo-using-hexagon-shape_1101554-16445.jpg?semt=ais_hybrid&w=740&q=80"alt="logo" height="80" width="80" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 " style="gap:80px; font-weight:bold;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="link.php">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>
        
        
        
      </ul>
      <form class="d-flex">
        <a href="logout.php" class="btn btn-outline-danger">logout </a>
        
      </form>
    </div>
  </div>
</nav>
