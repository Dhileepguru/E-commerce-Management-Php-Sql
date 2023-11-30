<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['admin_name'];
    $password = $_POST['admin_password'];

    $con = mysqli_connect("localhost", "root", "", "mystore");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admin WHERE username = '$username' ";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
       
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<script>alert("Admin");</script>';
            echo "logged in";
        }
    } else {
        echo '<script>alert("No user found with the given username.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <title>E-commerce</title>
    <style>
      .head h1 {
    padding: 10px 10px 2px 10px;
    word-spacing: 4px;
    border-radius: 10px;
    background-size: auto;
    color: white;
    font-display: flex;
    position: fixed;
    font-family: 'Chiller', 'fantasy';
    font-size: 40px;
    text-align: justify;
    /* Add your additional styles here */
    font-weight: bold; /* Example: Set the font weight to bold */
    text-transform: uppercase; /* Example: Convert text to uppercase */
}

      body {
    background-image: url(../assets/images/lobg4.jpg); 
    background-size: cover;  
    font-family: 'Asap', sans-serif;
  }
  
  .login {
    overflow: hidden;
    background-color: white;

    padding: 40px 30px 30px 30px;
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    transform: translate(-50%, -50%);
    transition: transform 300ms, box-shadow 300ms;
    box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
  }
  
  .login::before,
  .login::after {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-top-left-radius: 40%;
    border-top-right-radius: 45%;
    border-bottom-left-radius: 35%;
    border-bottom-right-radius: 40%;
    z-index: -1;
  }
  
  .login::before {
    left: 40%;
    bottom: -130%;
    background-color:lightblue;
    animation: wawes 6s infinite linear;
  }
  
  .login::after {
    left: 35%;
    bottom: -125%;
    background-color: black;
    animation: wawes 7s infinite;
  }
  
  .login > input {
    font-family: 'Asap', sans-serif;
    display: block;
    border-radius: 5px;
    font-size: 16px;
    
    width: 100%;
    border: 0;
    padding: 10px 10px;
    margin: 15px -10px;
  }
  a{
        color:white;
        text-decoration: none;
        margin-left: 20px;
      
        
    }
    li{
        list-style-type: none;
        margin-left: 720px;
        text-decoration: none;
        
    }
    
  
  .login > button {
    font-family: 'Asap', sans-serif;
    cursor: pointer;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
    width: 80px;
    border: 0;
    padding: 10px 0;
    margin-top: 10px;
    margin-left: -5px;
    border-radius: 5px;
    background-color:black;
    transition: background-color 300ms;
  }
  
  .login > button:hover {
    background-color:green;
  }
  
  @keyframes wawes {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
  
  a {
    text-decoration: none;
    color: rgba(255, 255, 255, 0.6);
    position: absolute;
    right: 10px;
    bottom: 10px;
    font-size: 12px;
  }
  @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
    .head {
        text-align: center;
        color: rgb(0, 0, 0);
        font-size: 15px;
        box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    nav {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 80px;
    }
    .h1 {
        padding: 10px 10px 2px 10px;
        word-spacing: 4px;
        border-radius: 10px;
        background-size: auto;
        color: white;
        font-display: flex;
        position: fixed;
        font-family: 'Chiller', 'fantasy';
        font-size: 40px;
        text-align: justify;
    }
    .im {
        position: fixed;
        left: 30px;
        max-height: 50px;
    }

    .container {
        text-align: center;
        padding-left: 100px;
        padding: 20px;
        border: 2px solid rgb(211, 204, 197);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 400px; /* Adjusted height */
        background-color: white; /* Adjusted background color */
    }

    .number {
        border-radius: 50px;
        padding: 10px;
        text-align: center;
    }

    .submit {
        border-radius: 50px;
        padding: 20px;
        text-align: center;
        width:150px;
    }

    .name {
        border-radius: 50px;
        padding: 10px;
        text-align: center;
    }

    .name.placeholder {
        text-align: center;
        margin-left: 100px;
    }

    .name:focus::placeholder {
        border-color: #1a75ff;
    }

    .submit:focus {
        border-color: #1a75ff;
        background-color: lightgreen;
        transition: all 0.3s ease;
    }

    input {
        outline: none;
        padding-left: 10%;
        border-radius: 15px;
        border: 1px solid lightgrey;
        border-bottom-width: 2px;
        font-size: 17px;
        transition: all 0.3s ease;
    }

    input:focus::placeholder {
        color: #1a75ff;
    }

    .submit:hover {
        left: 0;
        background-color: lightgreen;
        transition: all 0.6s ease;
    }

    input:focus {
        border-color: #1a75ff;
    }

    html {
        
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        font-family: "Poppins", sans-serif;
    }
    a{
        color:white;
        text-decoration: none;
        margin-left: 20px;
      
        
    }
    li{
        list-style-type: none;
        margin-left: 720px;
        text-decoration: none;
        
    }
    
    footer {
           
            color: white; /* Text color */
            padding: 20px;
            margin-left: 1px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: white; /* Link color */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
   </style>
  
  

 
  </head>
  <body>
  <div class="head">
      <nav>
        <img src="assets/images/logomain.png" class="im" />
        <h1>Administration</h1>
      </nav>
    </div>

    <br>
    <br>
    <br>


    <form method="POST" action="index2.php" class="login">
        <label for="username">Username</label>
        <input type="text" class="name" name="admin_name" placeholder="Enter your Name"  />
        <label for="password">Password</label>
        <input type="password" class="number" placeholder="Password" name="admin_password" required  />
        <button type="submit ">Login</button>
      </form>
      <footer>
    <p>&copy; 2023 Shopify</p>
</footer>
      
    <script src="/assets/script.js">
      
    </script>
    <script>
    console.log("Script executed");
</script>

  </body>
</html>

