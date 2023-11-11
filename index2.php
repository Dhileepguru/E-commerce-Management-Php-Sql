

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .logo{
            width:10%;
            height:10%;
        }
        .m{
            color:grey;
        }
        button{
            margin:10px;
            margin-top:px;
            margin-left:100px;
            border-radius:5px;
            border-width:2px;
            padding:5px;
        }
        #logoutButton{
            margin-left:50px;
            margin-top:50px;
        }
        .container{
            margin:100px;
            margin-left:5px;
            
        }
        .btn1{
            margin-left:10px;
        }
        .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}

.nav-link {
    text-decoration: none;
}

button {
    display: inline-block;
    margin: 0 10px; 
    padding: 5px 10px; 
}

    </style>
</head>
    <body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="./assets/images/logo2.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Shopify
        </a>
        <ul class="navbar-nav">
       
            <li class="nav-items">
            
            </li>
            <li class="nav-items"><a href="" class="nav-link">Welcome</a>
            </li>
        </ul>
    </div>
    </nav>

    <div class="bg-dark">
        <h3 class="m text-center p-2 bg-dark">Manage Details</h3>
    </div>
    
    <div class="row">
    <div class="col-md-12  margin-10">
    <div class="button text-center"></div>
    <div class="navbar">
    <a href="index2.php?insert_category" class="nav-link">
        <button>Insert Categories</button>
    </a>
    <a href="index2.php?insert_brands" class="nav-link">
        <button>Insert Brands</button>
    </a>
    <button>
        <a href="" class="nav-link">View Products</a>
    </button>
    <button>
        <a href="insertproduct.php" class="nav-link">Insert Products</a>
    </button>
    <button>
        <a href="" class="nav-link">View Categories</a>
    </button>
    <button>
        <a href="" class="nav-link">View Brands</a>
    </button>
</div>

        <button  class="btn btn-outline-warning" id="logoutButton">Logout</button>


    </div>
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insertcategories.php');
        }
        ?>
        <?php
        if(isset($_GET['insert_brands'])){
            include('insertbrands.php');
        }
        ?>

    </div>
    









    <script>
        
        const logoutButton = document.getElementById('logoutButton');

        logoutButton.addEventListener('click', function () {
            window.location.href = 'index.php';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>