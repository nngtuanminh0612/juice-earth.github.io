<!doctype html>
<html class="no-js" lang="">
<head>
    <?php
    session_start();

    if (isset($_SESSION['username'])) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
    } else {
        // Redirect them to the login page
        header("Location: http://titan.csit.rmit.edu.au/~s3581439/ebusiness/login.php");
    }
    ?>
    <meta charset="utf-8">
    <title>Juice-Earth</title>
    <meta name="description" content="Juice Earth - Rmit E Business Systems">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
</head>
<body onload="updateCartCount();">
<script src="js/main.js"></script>
<!--- Top Navigation Part -->
<nav>
    <div style="z-index:100; display: flex; align-items: center;">
        <a href="index.php">
            <img src="img/logo-new.png" alt="Juice Earth Logo" style="height:80px; padding: 5px;">
        </a>
    </div>
    <div id="menuItemsContainer">
        <a href="index.php"><span class="menuItem" style="color: black;">HOME</span></a>
        <a href="product_catalogue.php"><span class="menuItem">SHOP</span></a>
        <a href="aboutus.php"><span class="menuItem">ABOUT US</span></a>
        <a href="contactus.php"><span class="menuItem" id="menuLastElement">CONTACT US</span></a>
    </div>
    <div id="cartIconContainer">
        <a href="cart.php">
            <span id="cartCounter">0</span>
            <img src="img/shopping-cart-128.png" alt="Shopping Cart" style="height:45px;">
        </a>
    </div>
</nav>
<div id="bannerHome">
    <span id="bannerHomeTitle">Jump Start Healthy With Fresh Juice Made To Order!! <button><a
                    href="product_catalogue.php"
                    style="text-decoration: none; color: white;">Order Now</a></button></span>
</div>
</div>
<div class="genericContainerCentered" style="    border: 2px cornsilk solid; border-radius: 3px;">
    <h4>Subscribe to our newsletter
        <br> Enter your email to keep up with latest editions
    </h4>
    <form method="POST" onsubmit="event.preventDefault();" id="emailForm" style="display: flex; align-items: center;">
        <input type="email" name="email" id="subscribeEmail" style="margin-bottom: 0;">
        <button type="submit" class="button-secondary"
                onclick="contactUsEmail(document.getElementById('subscribeEmail').value);">Start Living Healthy
        </button>
    </form>
</div>
<div class="productBannerCatalogue" id="productBanner1">
    <div class="productBannerCatalogueInfo" style="left: 0">
        <h2 style="text-align: center; margin-top: 3px; margin-bottom: 0;">STORY BEHIND<br>JUICE EARTH</h2>
        <span>
      In August 2019, we discovered the power of juice cleanse and the power it has to transform one’s life. What sets Juice Earth apart from our competitors in the market is that we incorporate asian ingredients such as ginger, beetroot, guava etc in our juices.
    </span>
        <h3 style="border-bottom: 3px solid black; max-width: fit-content;"><a href="aboutus.php"
                                                                               style="text-decoration: none; color: black">READ
                MORE</a></h3>
    </div>
</div>
<div class="productBannerCatalogue" id="productBanner2">
    <div class="productBannerCatalogueInfo" style="right: 0; background: honeydew;">
        <h2 style="text-align: left; margin-top: 8px;">CLEANSE PROGRAMMES</h2>
        <span>
      Subscribe now to our customised juice cleanse programs to gain the maximum benefits of our cold pressed juices. All ingredients of our pressed juices are sourced locally from our Australian farmers. Let Juice Earth accompany you on your healthy journey!
    </span>
        <h3 style="border-bottom: 3px solid black; max-width: fit-content;"><a href="product_catalogue.php"
                                                                               style="text-decoration: none; color: black">SHOP
                CLEANSES</a></h3>
    </div>
</div>
<div style="min-height: 350px;">
<span class="subHeading">
      <h2>Testimonials</h2>
    </span>
    <div class="testimonial-cards-container">
        <div class="card-container" id="card1">
            <div class="card">
                <div class="front">
                    <img src="img/icons/iconfinder_11_avatar_2754576.png">
                    <span>"This is simply unbelievable! Great job, I will definitely be ordering again!"
            <br><span class="testimonialName">Ford B.</span>
            </span>
                </div>
                <div class="back">
                    <img src="img/icons/iconfinder_2_avatar_2754578.png">
                    <span>"I will recommend you to my colleagues. Juice earth did exactly what you said it does."
            <br><span class="testimonialName">Keslie O.</span>
            </span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <img src="img/icons/iconfinder_10_avatar_2754575.png">
                    <span class="testimonialText">"It fits our needs perfectly. I am so pleased with this product."
            <br><span class="testimonialName">Darien W.</span>
            </span>
                </div>
                <div class="back">
                    <img src="img/icons/iconfinder_2_avatar_2754578.png">
                    <span class="testimonialText">"This is simply unbelievable! Juice-Earth's fresh juices is the real deal! I have gotten at least 50 times the value from Juice-Earth's fresh juices."
            <br><span class="testimonialName">Tara M.</span>
            </span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <img src="img/icons/iconfinder_9_avatar_2754584.png">
                    <span>"I like juice earth more and more each day because it makes my life a lot easier. Nice work on your juices. I would like to personally thank you for your outstanding product."
            <br><span class="testimonialName">Dagmar W.</span>
            </span>
                </div>
                <div class="back">
                    <img src="img/icons/iconfinder_8_avatar_2754583.png">
                    <span>"Thank You! Thank you for making it painless, pleasant and most of all hassle free!"
            <br><span class="testimonialName">Cacilie W.</span>
            </span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <img src="img/icons/iconfinder_7_avatar_2754582.png">
                    <span>Juice earth impressed me on multiple levels. Juice earth is worth much more than I paid."
            <br><span class="testimonialName">Eilis S.</span>
            </span>
                </div>
                <div class="back">
                    <img src="img/icons/iconfinder_4_avatar_2754580.png">
                    <span>"Juice earth is the next killer subscription service."
            <br><span class="testimonialName">Liza J.</span>
            </span>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <img src="img/icons/iconfinder_1_avatar_2754574.png">
                    <span>"Juice-Earth's fresh juices should be nominated for service of the year. We were treated like royalty. Thank You!"
            <br><span class="testimonialName">Gomer L.</span></span>
                </div>
                <div class="back">
                    <img src="img/icons/iconfinder_2_avatar_2754578.png">
                    <span>"I will let my mum know about this, she could really make use of Juice-Earth's fresh juices! We're loving it. No matter where you go, Juice-Earth's fresh juices is the coolest, most happening thing around! The best on the net!"
            <br><span class="testimonialName">Patsy H.</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- End Top Navigation Part -->
</body>
<footer>
    <div id="footerContainer">
        <div class="footerColumn">
            <span class="footerTitle" style="font-size: 18px; font-weight: 900">Juice Earth</span>
            <span class="footerItems" style="font-weight: bold;">We're a team that<br>adore what we do</span>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Explore</span>
            <a class="footerItems" href="index.php">Home</a>
            <a class="footerItems" href="product_catalogue.php">Shop</a>
            <a class="footerItems" href="aboutus.php">About Us</a>
            <a class="footerItems" href="contactus.php">Contact Us</a>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Visit</span>
            <span class="footerItems">124 La Trobe St,<br>Melbourne<br>VIC 3000</span>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Follow</span>
            <a class="footerItems">Instagram</a>
            <a class="footerItems">Facebook</a>
            <a class="footerItems">Twitter</a>
        </div>
        <div class="footerColumn">
            <span class="footerTitle">Additional Features</span>
            <a class="footerItems">Email Newsletter Subscribe</a><a class="footerItems">Contact Us Feature</a>
        </div>
    </div>
    <div class="genericContainer" id="copyrightFooter">
        <p>&copy; 2019 Juice-Earth Ltd.</p>
    </div>
</footer>
</html>


