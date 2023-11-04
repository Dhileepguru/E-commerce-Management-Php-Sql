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
        echo "Login Successful";
    } else {
        echo "Username or password is wrong";
    }
}
?>