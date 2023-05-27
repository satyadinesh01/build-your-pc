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
                <li><a href="about.php">ABOUT US</a></li>
                <li><a class="active" href="contact.php">CONTACT</a></li>
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
        <h2>#LET'S TALK</h2>
        <p>“LEAVE A MESSAGE, WE LOVE TO HEAR FROM YOU”</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency location or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Rollavaka , vizianagaram ,andra pradesh , 533201</p>
                </li>
                
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>satyadinesh7642@gmial.com</p>
                </li>
                
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p> contact : 9347*5*797</p>
                </li>
                
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 4.00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.4511561396534!2d83.38995537505397!3d18.18918008284128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3bef5e7fab5d93%3A0x8539c45d69778c2f!2sCenturion%20University%20Vizianagaram%20-%20BTech%20Engineering%20College%2C%20Paramedical%20Courses!5e0!3m2!1sen!2sin!4v1681820124292!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="your name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="your message"></textarea>
            <button class="normal">submit</button>
        </form>

        <div class="people">
            <div>
                <img src="images/people/1.png" alt="">
                <p><span>SATYA DINESH</span> B.Tech 2 year CSE <br> Phone: +91 93 47 85 27 09 <br>Email: satyadinesh7642@gmial.com</p>
            </div>

            <div>
                <img src="images/people/2.png" alt="">
                <p><span>HEMANTH BOJJA</span> B.Tech 2 year CSE <br> Phone: +91 93 47 85 27 09 <br>Email: hemanthbojja@gmial.com</p>
            </div>

            <div>
                <img src="images/people/3.png" alt="">
                <p><span>SAI VIKAS</span> B.Tech 2 year CSE <br> Phone: +91 93 47 85 27 09 <br>Email: saivikas@gmial.com</p>
            </div>
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
