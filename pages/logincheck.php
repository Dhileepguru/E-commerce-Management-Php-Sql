<?php
  include('connect.php');
  echo '<script>alert("Welcome back Logged in successfully");</script>';

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
            padding-top: 2px;
        }
        .welcome{
            margin-left:600px;
            text-align:center;
        }
        .card-img-top{
          width:100%;
          height:300px;
          object-fit:contain;
        }
        .bg-grey{
          background-color:green;
        }
        .col-md-2{
          background-color:lightgreen;
          margin-bottom:10px;
        }
        .card{
          margin-left:20px;
        }

    </style>
    
       
    
</head>
<body>
<!-- nav -->
<div class="container-fluid p-0 ">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="./assets/images/logomain2.png" alt="alt" class="logo">
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Admins</a>
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

    <!--below nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link welcome"  href="#"><h2>Welcome to Shopify</h2></a> 
        <li>
      </ul>
      </nav>
      <br>
    <!-- product-list -->
    <div class="row">
        <div class="col-md-10">
          <div class="row">
            <?php
            $select_query="select * from `products` order by rand()";
            $result_query=mysqli_query($con,$select_query);
            while($row= mysqli_fetch_assoc($result_query)){
              $product_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_description=$row['product_description'];
              $category_id=$row['category_id'];
              $brand_id=$row['brand_id'];
              $product_image1=$row['product_image1'];
              $product_price=$row['product_price'];
              
              echo "<div class='col-md-4 mb-2 '>
              <div class='card'>
                  <img src=' ./assets/images/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-success'>Add to Cart</a>
                    <a href='#' class='btn btn-primary'>View More</a>
                  </div>
                </div>
              </div>";
            }
            ?>
          
          <!--row end-->

          </div>
          <!--column end -->

        </div>
        
        <div class="col-md-2">
          <div class="col-md-2  p-0">
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-primary products"></li>
              <a href="#" class="nav-link text-dark"><h2>Categories</h2></a>
              
              <?php
              $select_categories="select * from `categories` order by rand()";
              $result_categories=mysqli_query($con,$select_categories);
              while($row_data=mysqli_fetch_assoc($result_categories)){
                $categories_title=$row_data['category_title'];
                $categories_id=$row_data['category_id'];
                echo "<li class='nav-items'>
                <a href='#' class='nav-link text-light'><h3>$categories_title</h3></a>
                <li>";

          

              }
              ?>
              
            </ul>
            <ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-primary products"></li>
  <a href="#" class="nav-link text-dark"><h2>Brands</h2></a>
  
  <?php
  $select_brand = "select * from `brand` order by rand()";
  $result_brand = mysqli_query($con, $select_brand);
  while ($row_data = mysqli_fetch_assoc($result_brand)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo "<li class='nav-items'>
            <a href='#' class='nav-link text-light'><h3>$brand_title</h3></a>
          </li>";
  }
  ?>
</ul>

          </div>





        </div>

    </div>
    


<div class="bg-grey p-3 text-center">
        <p> All Rights Reserved © Copyright Designed by Dhileep-2023</p>
  
    <script>
        
        const logoutButton = document.getElementById('logoutButton');

        logoutButton.addEventListener('click', function () {
            window.location.href = 'login.php';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
