<?php
if(!isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $con = mysqli_connect("localhost", "root","", "movie");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * from login WHERE username='$username' AND
    password='$password' ";
    $result=mysqli_query($con,$sql);
    $resultcheck=mysqli_num_rows($result);
    if ($resultcheck > 0) {
        
        //echo '<script>alert("Logged in successfully!");</script>';
    } else {
        echo "Username or password is wrong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <style>
        .logo{
            width:7%;
            height:7%;
        }
        #logoutButton{
            margin-left:5px;
        }

    </style>
    
       
    
</head>
<body>
<!-- nav -->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="./assets/images/logo2.jpg" alt="alt" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart<sup>1</sup></a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <button  class="btn btn-outline-warning" id="logoutButton">Logout</button>

      </form>
    </div>
  </div>
</nav>
    </div>
    
































    <div class="bg-grey p-3 text-center">
        <p> All Rights Reserved © Copyright Designed by Dhileep-2023</p>

    <script>
        
        const logoutButton = document.getElementById('logoutButton');

        logoutButton.addEventListener('click', function () {
            window.location.href = 'index.php';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
