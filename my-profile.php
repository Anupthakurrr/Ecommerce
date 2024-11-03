<!DOCTYPE html>
<html lang="en">
<head>
    <title>All products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    text-align: center; /* Center-align text */
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 8px 0;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}
/* .cart {
    position: relative;
    margin-top: 25px;
    margin-left: 40px;
    
}  */

.cart-icon {
    font-size: 60px; /* Adjust size as needed */
    position: absolute;
    top: 20;
    right: 35px; /* Adjust as needed */
    cursor: pointer;
}
/* CSS for profile picture */
.profile-pic {
    width: 40px; /* Adjust size as needed */
    height: 40px; /* Adjust size as needed */
    border-radius: 50%;
    margin-top: 15px; /* Adjust vertical position */
    margin-right: 20px; /* Adjust horizontal position */
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="container">
    <div class="Navbar">
        <div class="logo">
        <img src="mainlogo.png" width="150px" height="80px">
        </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="userhome.php">Home</a></li>
                    <li><a href="productprocess.php">Products</a></li>
                    <li><a href="productabout.php">About</a></li>
                    <li><a href="productcontact.php">Contact</a></li>
                </ul>
                <div class="dropdown">
                        <img src="profile-default-png.png" alt=""  width="40px" height="40px">
                        <!-- <button >Dropdown</button> -->
                            <div class="dropdown-content">
                                <a href="my-profile.php">My Profile</a>
                                <a href="myorder.php">My Orders</a>
                                <a href="logout.php">logout</a>
                            </div>
                    </div>
            
            </nav>
            <div class="cart-icon">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>
        
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<div class="container">
    <div class="row mt-4">
        <div class="col-12 col-md-12 col-sm-12 ">
            <div class="card" id="category_table">
                <div class="card-header bg-primary">
                    <h4 class="text-white">User Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                            <img src="sakshi.jpg" height="100px" width="100px" alt="<?= $profile['name']; ?>" style="border-radius:50%"><br>
                                            <h5>Sakshi kumari</h5>
                                            Update Image:<input type="file" name="file1">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" value="sakshi774" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label for="">Email</label>
                                                        <input type="text" name="email" value="sakshikumari@rku.ac.in" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            <i class="fa fa-pen me-2"></i>Edit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---footer-->
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our app</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="google-play.png">
                        <img src="app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="mainlogo.png">
                    <p>Our purpose is to sustainably make the pleasure and benefits of western clothes accesible to the many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog post</li>
                        <li>Return policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2024 - RKU</p>
        </div>
    </div>

    <!---js for toggle menu-->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>

</body>
</html>