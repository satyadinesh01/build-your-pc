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
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                <li><a class="active" href="cart.php" id="lgbag"><i class="fa fa-shopping-cart" ></i></a></li>
                <a href="" id="close"><i class="far fa-times"></i></a>
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

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://m.media-amazon.com/images/I/61gcREq9LqL._SX679_.jpg" alt=""></td>
                    <td>Intel Core i7-13700KF 16-Core</td>
                    <td>₹47,000</td>
                    <td><input type="number" value="1"></td>
                    <td>₹47,000</td>
                </tr>

                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://m.media-amazon.com/images/I/71XXKiUYqcL._SX679_.jpg" alt=""></td>
                    <td>Samsung 970 EVO Plus Series - 2TB PCIe NVMe - M.2 Internal SSD</td>
                    <td>₹18,000</td>
                    <td><input type="number" value="1"></td>
                    <td>₹18,000</td>
                </tr>

                <tr>
                    <td><a href=""><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://m.media-amazon.com/images/I/81GgwLqahaL._SX679_.jpg" alt=""></td>
                    <td>Asus UPS</td>
                    <td>₹13,000</td>
                    <td><input type="number" value="1"></td>
                    <td>₹13,000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <input type="text" placeholder="Enter your coupon">
            <button class="normal">Apply</button>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>cart Subtotal</td>
                    <td>$388</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$388</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
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
