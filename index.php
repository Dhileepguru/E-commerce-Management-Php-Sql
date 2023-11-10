<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <title>E-commerce</title>
    <style>
      body {
    background-image: url(assets/images/BG5.jpg); 
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
    background-color:lightgreen;
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
 
    </style>
  </head>
  <body>
    <form method="POST" action="index2.php" class="login">
        <label for="username">Username</label>
        <input type="text" name="username" />
        <label for="password">Password</label>
        <input type="password" name="password" />
        <button type="submit ">Login</button>
      </form>
      
      
    <script src="/assets/script.js"></script>
  </body>
</html>

