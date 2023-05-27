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
</head>
<body>

<style>
        #header h1{
            color: white;
        }

        #teja{
        display: flex;
        }

        #teja h1{
            margin-left: 20px;
            font-size: 40px;
            font-weight: 600;
        }
    </style>

    <section id="header">
    <div id="teja">
        <a href="#"><img src="images/newlogo.png" alt="logo" class="logo"></a>
        <h1 class="name"><span><?php echo $_SESSION['user_name'] ?></span></h1>
        </div>
        <div>
            <ul id="navbar">
                <li><a href="home.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a class="active" href="about.php">ABOUT US</a></li>
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
    
    <section id="page-header" class="about-header"> 
        <h2>#KNOW-US</h2>
        <p>“The best friend is the one who brings out the best in me.”</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="images/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are ?</h2>
            <p>Centurion University of Technology and Management, Andhra Pradesh (CUTM AP) is a private university[2]
             located at Tekkali Village in Nellimarla mandal, Vizianagaram district, Andhra Pradesh, India. The university
              was established in 2017 by the Centurion School of Rural Enterprise Management Trust (CSREM Trust) through 
              the Andhra Pradesh Private Universities (Establishment and Regulation) Act, 2016.[3] It offers various diploma,
               undergraduate and postgraduate courses, as well as a Ph.D program.</p>

            <abbr title="">Let us be grateful to people who make us happy, they are the charming gardeners who make our souls 
            blossom.</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="6" width="100%">
            @SATYADINESH_______@HEMANTH_______@VIKAS_______@MURALI_______@BUILT_YOUR_PC_______@CUTM-AP
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>CENTURION UNIVERITY <a href="">AP</a></h1>
        <div class="video">
            <video autoplay muted loop src="images/about/The.mp4"></video>
        </div>
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
