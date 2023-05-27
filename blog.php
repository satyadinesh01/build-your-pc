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
                <li><a class="active" href="blog.php">BLOG</a></li>
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
    
    <section id="blog-header"> 
        <h2>#READ MORE</h2>
        <p>Read all case studies about our products..!</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>01/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>02/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>03/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>04/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>05/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>06/10</h1>
        </div>

        
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/b7.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>SATYA DINESH</h4>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                <a href="">CONTINUE READING</a>
            </div>
            <h1>07/10</h1>
        </div>
    </section>

    <section id="pagenation" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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
