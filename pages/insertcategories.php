<?php
include('connect.php');

if(isset($_POST['insert_cat'])){
    $category_title=$_POST['categorytitle'];
    $select_query = "select * from  `categories` where category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0) {
        echo "<script>alert('This category is already present in the database. Please insert a new one.')</script>";
    } else {

    $insert_query = "insert into `categories` (category_title) values ('$category_title')";
        $result = mysqli_query($con, $insert_query);
        if($result) {
            echo "<script>alert('Category has been inserted successfully')</script>";
        }
    }}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Categories</title>
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

<h2>Insert Categories</h2>

<form action="" method="post">
    <label for="categoryName">Category Name:</label>
    <input type="text" id="categoryName" name="categorytitle" placeholder="Enter your category" required>
    
    <input type="submit" name="insert_cat" value="Submit">
</form>

</body>
</html>
