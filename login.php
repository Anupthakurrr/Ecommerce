<?php
include('dbconnection.php');
session_start();

$errorMessage = ""; // Initialize an error message variable

if(isset($_POST['username']) && isset($_POST['password'])) {
    // Check if username and password match admin credentials
    $admin_username = "admin";
    $admin_password_hash = password_hash("admin123", PASSWORD_DEFAULT);

    // Check if it's admin login
    if($_POST['username'] == $admin_username && password_verify($_POST['password'], $admin_password_hash)) {
        $_SESSION['role'] = 'admin';
        header("Location: dashboard.php");
        exit;
    }

    // Check if username and password match user credentials
    $username = "users";
    $user_password_hash = password_hash("user123", PASSWORD_DEFAULT);

    // Check if it's user login
    if($_POST['username'] == $username && password_verify($_POST['password'], $user_password_hash)) {
        $_SESSION['role'] = 'users';
        header("Location: userhome.php");
        exit;
    }

    // If neither admin nor user login succeeds, set an error message
    $errorMessage = "Invalid username or password";
}

// If there's an error message, display it in an alert
if(!empty($errorMessage)) {
    echo '<script>alert("' . $errorMessage . '");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <style>
.Navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}

nav ul li{
    display: inline-block;
    margin-right: 20px;
    transition: 0.3s ease-in-out;
}
nav ul li:hover{
    border-bottom: 3px solid greenyellow;
    transform: scaleX(0.90);
}
a{
    text-decoration: none;
    color: #555;
}

    </style>

</head>

<body>
    <div class="header">
        <div class="container">
        <div class="Navbar">
            <div class="logo">
            <img src="mainlogo.png" width="150px" height="80px">
            </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registration.php">Register</a></li>

                    </ul>
                </nav>
                <div class="cart-icon">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
                <div class="menu-icon">
                    <ion-icon name="menu-outline"></ion-icon onclick="menutoggle()">
                </div>
            </div>
        <!-- MAIN CONTAINER -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- LOGIN CONTAINER -->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

         <!-- LEFT BOX -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >
                <img src="app-store.png" style="width: 380px;">
            </div>

            <!-- RIGHT BOX -->
            <div class="col-md-6 right-box">
                <form action="login.php" method="post" id="form">
                    <div class="row align-items-center">
                        <div class="hearder-text mb-4">
                            <h2>E-Commerce Web</h2>
                        </div>

                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" name="username" placeholder="Username">
                        </div>

                        <div class="mb-4">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">

                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>

                        </div> 
                        
                        <div class="input-group mb-4">
                            <button type="submit" name="login" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>

                        <div class="row">
                            <small>Don't have an account? <a href="registration.php">Register Here</a></small>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</script>
<script src="jquery-3.7.1.js"></script>
<script src="jquery.validate.js"></script>
<script src="formValidation.js"></script>
</body>
</html>