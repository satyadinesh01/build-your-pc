<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>BUILT YOUR PC</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
        #sm-banner .banner-box{
            background-image: url("images/banner/bn7.jpg");
        }

        #sm-banner .banner-box2 {
            background-image: url("images/banner/b10.jpg");
        }
        #banner3 .banner-box {
            background-image: url("images/banner/b8.jpg");
        }

        #banner3 .banner-box2 {
            background-image: url("bn4.jpg");
        }

        #banner3 .banner-box3 {
            background-image: url("b44.jpg");
        }
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="images/newlogo.png" alt="logo" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                <li><a href="cart.php" id="lgbag"><i class="fa fa-shopping-cart" ></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa fa-shopping-cart" ></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    
    <section id="hero"> 
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <h4>Trade in OFFER</h4>
        <h2>Assemble your PC</h2>
        <h1>with powerfull gadgets</h1>
        <p>save more with coupons & up to 70% off!</p>
        <button>shop now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/features/f1.png" alt="">
            <h6>FREE SHIPPING</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f2.png" alt="">
            <h6>ORDER</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f3.png" alt="">
            <h6>SAVE MONEY</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f4.png" alt="">
            <h6>PROMOTIONS</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f5.png" alt="">
            <h6>HAPPY SELL</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/f6.png" alt="">
            <h6>SUPPORT</h6>
        </div>

    </section>

    <section id="product1" class="section-p1">
        <h2 style="color: white;">Featured Products</h2>
        <p style="color: white;">best deals with top offers</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/61D91Wy2jQL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>NVIDIA</samp>
                    <h5>NVIDIA GeForce RTX 4090 24GB</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2,36,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/61uI+orDOZL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>INTEL</samp>
                    <h5>Intel Core i9-13900K 24-Cores</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹64,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/41mOrHPEHcL._SX300_SY300_QL70_FMwebp_.jpg" alt="">
                <div class="des">
                    <samp>KINGSTON</samp>
                    <h5>32GB DDR5 Dual Channel</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹22,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/51Brl+iYtvL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>SAMSUNG</samp>
                    <h5>2TB NVMe M.2 + 2TB HDD</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹25,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://cdn.shopify.com/s/files/1/0245/9382/5867/products/71E7Nnlt-JL._SL1500_1000x.jpg?v=1680182480" alt="">
                <div class="des">
                    <samp>ASUS</samp>
                    <h5>CM MasterLiquid ML360</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹10,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://cdn.shopify.com/s/files/1/0408/5792/7834/products/win-11-TRANS_1512x.png?v=1635439492" alt="">
                <div class="des">
                    <samp>WINDOWS</samp>
                    <h5>Windows 11 Home + USB Recovery</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹10,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/419-zywP9IL._SX300_SY300_QL70_FMwebp_.jpg" alt="">
                <div class="des">
                    <samp>AEVGA</samp>
                    <h5>1000W ATX 80 Plus Gold</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹16,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://cdn.shopify.com/s/files/1/0408/5792/7834/files/redux-system-removebg-preview.png?v=1614368532" alt="">
                <div class="des">
                    <samp>CPU</samp>
                    <h5>WHOLE PACKAGE</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹3,83,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>up to <span>40% off </span>on all products and accessories</h2>
        <button class="normal">explore more</button>
    </section>

    <section id="product1" class="section-p1">
        <h2 style="color: white;">New Arrival</h2>
        <p style="color: white;">best deals with top offers</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://sm.ign.com/ign_in/review/n/nvidia-gef/nvidia-geforce-rtx-4080-16gb-founders-edition-review_faza.jpg" alt="">
                <div class="des">
                    <samp>NVIDIA</samp>
                    <h5>NVIDIA GeForce RTX 4080 16GB</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹65,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/61gcREq9LqL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>INTEL</samp>
                    <h5>Intel Core i7-13700KF 16-Core</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹47,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/31pcENu6KaL._SX300_SY300_QL70_FMwebp_.jpg" alt="">
                <div class="des">
                    <samp>CORSAIR Vengeance</samp>
                    <h5>16GB DDR5 Dual Channel</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹16,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/71XXKiUYqcL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>SAMSUNG</samp>
                    <h5>Samsung 970 EVO Plus Series - 2TB PCIe NVMe - M.2 Internal SSD</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹18,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/81zbb+VRHvL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>Cooler Master</samp>
                    <h5>Cooler Master Hyper 212 LED Turbo CPU Cooler</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹14,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://rukminim1.flixcart.com/image/832/832/operating-system/8/g/f/ubuntu-usb-16-04-original-imaeq76kgchj3dpp.jpeg?q=70" alt="">
                <div class="des">
                    <samp>UBUNTU</samp>
                    <h5>UBUNTU SOFTWARE</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://m.media-amazon.com/images/I/81GgwLqahaL._SX679_.jpg" alt="">
                <div class="des">
                    <samp>ASUS</samp>
                    <h5>UPS</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹13,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="https://cdn.shopify.com/s/files/1/0408/5792/7834/files/06_-_Box-removebg-preview.png?v=1614370268" alt="">
                <div class="des">
                    <samp>CPU</samp>
                    <h5>WHOLE PACKAGE</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1,74,000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>the best products are in sell now</span>
            <button class="white">grab now</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>gamming mood</h4>
            <h2>up coming gadgets</h2>
            <span>the best products are in sell now</span>
            <button class="white">watch now</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>best deals on RAM</h3>
        </div>

        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>best deals on GPU</h3>
        </div>

        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>best deals on CPU</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>signup for newsletters</h4>
            <p>get e-mail updates about our latest shop and <span> special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">signup</button>
        </div>
    </section>

    <section id="foot">
        <footer class="section-p1">
    
            <div class="col">
                <img class="logo" src="images/logo.1.png" alt="">
                <h4>CONTACT</h4>
                <p><strong>Address:</strong> centurion university , VZM</p>
                <p><strong>Phone:</strong> +91 9347852797 / 9347852797</p>
                <p><strong>Hours:</strong> 10:00am-18:00pm , Mon-Sat</p>
            
                <div class="follow">
                    <h4>Follow us on</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
    
    
            <div class="col">
                 <h4>About Us</h4>
                 <a href="#">About Us</a>
                 <a href="#">Delivery information</a>
                 <a href="#">Privacy policy</a>
                 <a href="#">Terms and Conditions</a>
                 <a href="#">Contact Us</a>
            </div>
    
            <div class="col">
                <h4>My Accounts</h4>
                <a href="#">Sign in</a>
                <a href="#">View cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track my order</a>
                <a href="#">Help</a>
           </div>
    
           <div class="col install">
            <h4>Install App</h4>
                <p>From App Store or Google play</p>
                    <div class="row">
                        <img src="images/pay/app.jpg" alt="">
                        <img src="images/pay/play.jpg" alt="">
                    </div>
                <p>Secured payments Gateways</p>
                <img src="images/pay/pay.png" alt="">
           </div>
        </footer>

        <div class="copyright">
            <p>@2050, cutm.ap.ac.in and manageement</p>
       </div>

    </section>
    
    <script src="index.js"></script>
</body>
</html>

