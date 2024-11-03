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
            <div class="menu-icon">
                <ion-icon name="menu-outline"></ion-icon onclick="menutoggle()">
            </div>
        </div>
    </div>
</div>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Kanchanpur saptary Nepal</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Sunday to friday: 9:00am to 7:00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28529.969679857917!2d86.90925969999999!3d26.640598250000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef1d8ddb9b7eff%3A0x1843843c9e8e07d1!2sKanchanpur%2C%20Kanchanrup%2056400%2C%20Nepal!5e0!3m2!1sen!2sin!4v1702759930924!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>
                LEAVE A MESSAGE
            </span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
            <button class="normal">Submit</button>
        </form>
    </section>
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
    </div>
</footer>

</body>
</html>