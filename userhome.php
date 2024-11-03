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
        <div class="row">
            <div class="col2">
                <h1>True style<br>Never dies.</h1>
                <p>Clothing Hub is a budget-friendly clothing store that has colorful and trendy pieces for men and women. Their selection of graphic tees, sweetshirt, joggers, and sneakers.</p>
                <a href="product.html" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col">
                    <img src="header.png">
            </div>
        </div>
    </div>
</div>

    <!-------- featured categories -------->
    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="categories4.png">
            </div>
            <div class="col-3">
                <img src="categorie 2.png">
            </div>
            <div class="col-3">
                <img src="categories3.png">
            </div>
        </div>
     </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     <!-------- featured products -------->
     <div class="small-container"> 
        <h2 class="title">featured products</h2>
        <div class="row">
            <div class="col-4">
                <a href="productdetails.php"><img src="product 1.png"></a>
                <h4>Men's Graphic Printed Oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails1.php"><img src="product 2.png"></a>
                <h4>Street Oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails2.php"><img src="product 3.png"></a>
                <h4>Wolf Oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails3.php"><img src="product 4.png"></a>
                <h4>Rock And Roll oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$25.00</p>
            </div>
        </div>
        <h2 class="title">Latest products</h2>
        <div class="row">
            <div class="col-4">
                <a href="productdetails4.php"><img src="latest first.png"></a>
                <h4>Demon sweetshirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$10.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails5.php"><img src="latest pro 1.png"></a>
                <h4>Doland Duck oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$20.00</p>
            </div>
            <div class="col-4">
                <a href="productdetail6.php"><img src="latest 2nd.png"></a>
                <h4>Brown Joggers</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                </div>
                <p>$30.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails7.php"><img src="latest pro 4.png"></a>
                <h4>Astronaut Oversized T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <a href="productdetails8.php"><img src="latest 5.png"></a>
                    <h4>Anime Small Bag</h4>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                    </div>
                    <p>$5.00</p>
                </div>
                <div class="col-4">
                    <a href="productdetails9.php"><img src="latest 7.png"></a>
                    <h4>Thrones Green streetwear</h4>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    </div>
                    <p>$10.00</p>
                </div>
                <div class="col-4">
                    <a href="productdetails10.php"><img src="latest 9.png"></a>
                    <h4>Hawai Street slipper</h4>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                    </div>
                    <p>$5.00</p>
                </div>
                <div class="col-4">
                    <a href="productdetails11.php"><img src="latest 10.png"></a>
                    <h4>Gen-z cargo jeans</h4>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                    </div>
                    <p>$50.00</p>
           </div>
    </div>

         <!-------- offer -------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col2">
                <img src="offer.png" class="offer-img">
            </div>
            <div class="col2">
                <p>Exclusively Available on Clothing Hub</p><h1>Iphone 15 pro max case</h1>
                <small>Crafted with a blend of optically clear polycarbonate and flexible materials, the case fits right over the buttons for easy use. On the surface, a scratch-resistant coating has been applied to both the interior and exterior. And all materials and coatings are optimised to prevent yellowing over time.
                    Like every Apple-designed case, it undergoes thousands of hours of testing throughout the design and manufacturing process. So not only does it look great, it’s built to protect your iPhone from scratches and drops.</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>

    <!--------testimonial -------->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis soluta ut maiores tempore, vitae culpa aspernatur reiciendis, dolore inventore corrupti quas aliquid assumenda dolores enim ad minus! Sapiente, dignissimos.</p>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                    </div>
                    <img src="Elon musk.png">
                    <h3>Elon Musk</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis soluta ut maiores tempore, vitae culpa aspernatur reiciendis, dolore inventore corrupti quas aliquid assumenda dolores enim ad minus! Sapiente, dignissimos.</p>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                    </div>
                    <img src="mark.png" height="90%" width="90%">
                    <h3>Mark Zuckerberg</h3>
                </div>
                <div class="col-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus facilis soluta ut maiores tempore, vitae culpa aspernatur reiciendis, dolore inventore corrupti quas aliquid assumenda dolores enim ad minus! Sapiente, dignissimos.</p>
                    <div class="rating">
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-sharp"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                        <i><ion-icon name="star-outline"></ion-icon></i>
                    </div>
                    <img src="steve.png">
                    <h3>Steve jobs</h3>
                </div>
            </div>
        </div>
    </div>

     <!--------brand -------->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="H&M.png">
                </div>
                <div class="col-5">
                    <img src="gucci.png">
                </div>
                <div class="col-5">
                    <img src="Adidas_logo.png">
                </div>
                <div class="col-5">
                    <img src="Zara logo.png">
                </div>
                <div class="col-5">
                    <img src="Puma-Logo.png">
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