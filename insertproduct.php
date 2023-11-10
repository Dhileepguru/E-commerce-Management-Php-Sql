<?php
  include('connect.php');
  if(isset($_POST['insert_product'])){

    $product_title=$_POST['productTitle'];
    $product_Description=$_POST['productDescription'];
    $product_Keywords=$_POST['productKeywords'];
    $product_Category=$_POST['productCategory'];
    $product_brand=$_POST['productBrand'];
    $product_price=$_POST['productPrice'];

    $product_image1=$_POST['productImage1']['name'];
    $product_image2=$_POST['productImage2']['name'];
    $product_image3=$_POST['productImage3']['name'];

    $product_image1=$_POST['productImage1']['tmp_name'];
    $product_image2=$_POST['productImage2']['tmp_name'];
    $product_image3=$_POST['productImage3']['tmp_name'];

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Insert Product</title>
    <style>
        body {
            background-color: #f8f9fa; /* Set a light background color */
        }
        .container {
            background-color: #ffffff; /* Set a white background color for the container */
            border-radius: 10px; /* Add rounded corners to the container */
            padding-left: 250px;
            padding-right: 250px;
            margin-l eft:100px;
            margin-right:100px;
             
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for depth */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Insert Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productTitle" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="productTitle" name="productTitle">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
        </div>
        <div class="mb-3">
            <label for="productKeywords" class="form-label">Product Keywords</label>
            <input type="text" class="form-control" id="productKeywords" name="productKeywords">
        </div>
        <div class="mb-3">
            <label for="productCategory" class="form-label">Select a Category</label>
            <select class="form-select" id="productCategory" name="productCategory">
            <option value="">Select a category</option>
                <?php
                    $select_query="select * from `categories`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_title'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                ?>

            </select>
        </div>
        <div class="mb-3">
            <label for="productBrand" class="form-label">Select a Brand</label>
            <select class="form-select" id="productBrand" name="productBrand">
            <option value="">Select a brand</option>
            <?php
                    $select_query="select * from `brand`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $category_id=$row['brand_title'];
                        echo "<option value=''>$category_title</option>";
                    }
                ?>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <option value="">Select a brand</option>
                <!-- Add brand options dynamically here -->
            </select>
        </div>
        <div class="mb-3">
            <label for="productImage1" class="form-label">Product Image 1</label>
            <input type="file" class="form-control" id="productImage1" name="productImage1">
        </div>
        <div class="mb-3">
            <label for="productImage2" class="form-label">Product Image 2</label>
            <input type="file" class="form-control" id="productImage2" name="productImage2">
        </div>
        <div class="mb-3">
            <label for="productImage3" class="form-label">Product Image 3</label>
            <input type="file" class="form-control" id="productImage3" name="productImage3">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice">
        </div>
        <div class="text-center">
            <button type="submit" name="insert_product" class="btn btn-primary">Insert Product</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
