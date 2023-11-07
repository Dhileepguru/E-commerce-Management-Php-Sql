<?php
include('connect.php');

if(isset($_POST['insert_brand'])){
    $brand_title=$_POST['brandtitle'];
    $select_query = "select * from  `brand` where brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0) {
        echo "<script>alert('This brand is already present in the database. Please insert a new one.')</script>";
    } else {

    $insert_query = "insert into `brand` (brand_title) values ('$brand_title')";
        $result = mysqli_query($con, $insert_query);
        if($result) {
            echo "<script>alert('brand has been inserted successfully')</script>";
        }
    }}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Insert Categories</title>
    <!-- Include Bootstrap CSS (you need to download and link Bootstrap CSS) -->
    <link rel="stylesheet" href="path-to-bootstrap.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        .btn1 {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn1:hover {
            background-color: #0056b3;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Insert Brand</h2>

<form action="" method="post">
    <label for="categoryName">Brand Name:</label>
    <input type="text" id="categoryName" name="brandtitle" required>
    
    <input type="submit" name="insert_brand" value="Submit">
</form>

</body>
</html>
