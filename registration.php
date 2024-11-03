<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <style>
        .Navbar {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        nav {
            flex: 1;
            text-align: right;
        }
        nav ul {
            display: inline-block;
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
            transition: 0.3s ease-in-out;
        }

        nav ul li:hover {
            border-bottom: 3px solid greenyellow;
            transform: scaleX(0.90);
        }

        a {
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
        </div>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- LOGIN CONTAINER -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- LEFT BOX -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <img src="app-store.png" style="width: 380px;">
            </div>

            <!-- RIGHT BOX -->
            <div class="col-md-6 right-box">
                <form action="r1.php" method="post" id="form" enctype="multipart/form-data">
                    <div class="row align-items-center">
                        <div class="hearder-text mb-4" style="text-align: center;">
                            <h2>Register Your Account</h2>
                            <small class="text-success">E-Commerce Web</small>
                        </div>

                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" name="fn" placeholder="Fullname">
                        </div>

                        <div class="mb-4">
                            <input type="email" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Enter Email Address">
                        </div>

                        <div class="mb-4">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="pswd" id="password" placeholder="Password">
                        </div>

                        <div class="mb-4">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="repswd" id="confirm_password" placeholder="Confirm Password">
                        </div>

                        <div class="mb-4">
                            <label for="gen1"><b>Select Gender:</b></label>
                            <br>
                            <input type="radio" id="gen1" name="gen" value="Male"> Male
                            <input type="radio" id="" name="gen" value="Female"> Female
                        </div>

                        <div class="mb-4">
                            <input type="number" class="form-control form-control-lg bg-light fs-6" name="mobile" placeholder="Mobile Number">
                        </div>

                        <!-- <div class="mb-4">
                            <input type="file" class="form-control form-control-lg bg-light fs-6" name="pic" accept="image/*" id="file1">
                        </div> -->

                        <div class="input-group mb-4">
                            <button type="submit" name="btn" class="btn btn-lg btn-primary w-100 fs-6">Register Your Account</button>
                        </div>

                        <div class="row" style="text-align: center;">
                            <small>Already have an account? <a href="login.php">Log in</a></small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="formValidation.js"></script>
</body>
</html>


