<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/font-awesome.min.css">
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
                    <li><a href="login.php">login</a></li>
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

    <section id="page-header" class="about-header">
        <h2>#Know us</h2>
        <p> Lorem ipsum dolor sit amet consectetur </p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="model.jpg" alt="">
        <div>
            <h2>Who are you ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Sapiente maxime doloremque corporis velit repellendus aperiam id accusantium? Minima illum,
              minus labore deserunt necessitatibus vel inventore reprehenderit eum mollitia qui consequatur?</p>

              <abbr title="">Create stunning images with as much or as little control
                as you like thanks to a choice of basic and creative models.
              </abbr>
              <br><br>
              <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as little control
                as you like thanks to a choice of basic and creative models.</marquee>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-n1">
        <div class="Sign up for Newsletters" class="section-p1 section-n1">
            <p>Get Email updates about our latest shop and <span>Special offers</span></p>
    
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
           <a href="registration.php"><button class="normal">Sign up</button></a>
        </div>
    </section>
    

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="mainlogo.png" alt=""  width="120px" height="60px">
        <h4>Contact</h4>
        <p><strong>Address: </strong>Kanchanpur Bazar,saptary,Nepal</p>
        <p><strong>Phone: </strong>+977 9800000000</p>
        <p><strong>Hours: </strong>10:00 - 8:00, sun-sat</p>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Condition</a>
        <a href="contact.html">Contact us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">Help</a>
    </div class="col install">
    <h4>Instal App</h4>
    <p>From App store or google Play</p>
    <div class="row"></div>
        <img src="google-play.png" alt=""width="100px" height="50%">
        <img src="app-store.png" alt=""width="100px" height="50%"><br>
        <br>
    </div>

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
</footer>
</body>
</html>