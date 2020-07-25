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
<body>
<script src="js/main.js"></script>
<!--- Top Navigation Part -->
<nav>
    <div style="z-index:100; display: flex; align-items: center;">
        <a href="index.php">
            <img src="img/logo-new.png" alt="Juice Earth Logo" style="height:80px; padding: 5px;">
        </a>
    </div>
    <div id="menuItemsContainer">
        <a href="index.php"><span class="menuItem">HOME</span></a>
        <a href="product_catalogue.php"><span class="menuItem" style="color: black;">SHOP</span></a>
        <a href="aboutus.php"><span class="menuItem">ABOUT US</span></a>
        <a href="contactus.php"><span class="menuItem" id="menuLastElement">CONTACT US</span></a>
    </div>
</nav>
<!--- End Top Navigation Part -->
<?php
echo "<div style=\"display: flex;
    align-items: center;
    justify-content: center;\">
  <div style=\"display: flex; align-items: center; flex-direction: column; padding-left: 25px;\">
    <h2> Your Order Has Been Placed</h2>
    <img src=\"img/success_404675.png\" style=\"max-height: 250px; padding-bottom: 20px;\">
  </div>
  <div style=\"display: flex; min-height: 300px; background: lightgray; margin-right: 15px; margin-left: 10vw; padding: 10px;
    justify-content: space-evenly;
    border-radius: 20px;
    font-family: 'Lato', sans-serif;
    flex-direction: column;\">
    <h4 style=\"color: #2b542c;\">Your Order Will Be Shipped To:</h4>
    <span>Name: {$_POST['firstname']}</span>
    <span>Address: {$_POST['address']}, {$_POST['city']}, {$_POST['state']}, {$_POST['zip']}</span>
  </div>
</div>"; ?>
<script>delete_cookie('cart')</script>
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


