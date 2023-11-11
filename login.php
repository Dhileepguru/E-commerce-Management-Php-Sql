<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopify</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <link rel="icon" href="assets/images/logo2.png" alt="">
   <style>
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
        background: url(./assets/images/bg.png);
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
       
        <img src="assets/images/logomain.png" class="im"/>
        <ul nav class="nav_item">
            <li class="nav_item">
                <a href="#" class="nav_link">Products</a>
                <a href="#" class="nav_link">Business</a>
                <a href="#" class="nav_link">Advertisement</a>
                <a href="#" class="nav_link">Plans and pricing</a>
                <a href="#" class="nav_link">Learn</a>
            </li>
        </ul>
    </nav>
</div>
<br>
<br>
<br>
<div class="container">
    <form id="myform" action="logincheck.php" method="post">
        <div class="contents">
            <h1>Welcome to Shopify <br> Login</h1><br>
            <input type="text" class="name" placeholder="Enter your Name" required><p></p>
            <input type="text" class="number" placeholder="Password" required><p></p>
            <input type="submit" class="submit" value="submit">
        </div>
    </form>
</div>

<footer>
    <p>&copy; 2023 Shopify | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
</footer>

</body>
<script src="/assets/script.js"></script>
</html>
