<!DOCTYPE html>
<html lang="en">
<head>
    <title>All products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/font-awesome.min.css">
</head>
<body>
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

    <!---Single product details-->

    <div class="small-container single-products">
        <div class="row">
            <div class="col-2">
                <img src="p_details1.png" width="300%" id="productImg">

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="p_details1.png" width="90px" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="p_detailslogo.png" width="90px" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="p_detailsside.png" width="90px" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="p_detailsbrand.png" width="90px" class="small-img">
                        </div>
                    </div>


            </div>
            <div class="col-2">
                <p>Home/ T-shirt</p>
                <h1>Men's Graphic Printed Oversized T-shirt</h1>
                <h4>$50.00</h4>
                <select>
                    <option>select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to cart</a>
                <h3>Product details</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

        <!----products-->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related products</h2>
                <p>View More</p>
            </div>
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     <div class="small-container"> 
 
     </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     <div class="small-container"> 
        <div class="row">
            <div class="col-4">
                <img src="product 1.png">
                <h4>T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="product 2.png">
                <h4>T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="product 3.png">
                <h4>T-shirt</h4>
                <div class="rating">
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-sharp"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                    <i><ion-icon name="star-outline"></ion-icon></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="product 4.png">
                <h4>T-shirt</h4>
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


<!------js for product gallery-->

        <script>

            var productImg = document.getElementById("productImg");
            var smallImg = document.getElementsByClassName("small-img");

                smallImg[0].onclick = function()
                {
                    productImg.src = smallImg[0].src;
                }
                smallImg[1].onclick = function()
                {
                    productImg.src = smallImg[1].src;
                }
                smallImg[2].onclick = function()
                {
                    productImg.src = smallImg[2].src;
                }
                smallImg[3].onclick = function()
                {
                    productImg.src = smallImg[3].src;
                }


        </script>


</body>
</html>