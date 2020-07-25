<!DOCTYPE html>
<html lang="en" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Fruity Deluxe | Juice Earth</title>

  <link type="text/css" rel="stylesheet" href="juiceearth.css" media="all"/>

  <link rel="stylesheet" href="rating.css">
  <style>

    fieldset, label {
      margin: 0;
      padding: 0;
    }

    body {
      margin: 20px;
    }

    h1 {
      font-size: 1.5em;
      margin: 10px;
    }

    .rating {
      border: none;
      float: left;
    }

    .rating > input {
      display: none;
    }

    .rating > label:before {
      margin: 5px;
      font-size: 0 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }

    .rating > label {
      color: #ddd;
      float: right;
    }

    .rating > input:checked ~ label,
    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
      color: #FFD700;
    }

    .rating > input:checked + label:hover,
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label,
    .rating > input:checked ~ label:hover ~ label {
      color: #FFED85;
    }

  </style>

  <style>
    .maintext {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 20px;
    }
  </style>


  <style>
    * {
      box-sizing: border-box;
    }

    .zoom {
      padding: 50px;
      transition: transform .2s;
      width: 480px;
      height: 260px;
      margin: 0 auto;
    }

    .zoom:hover {
      -ms-transform: scale(1.35);
      -webkit-transform: scale(1.35);
      transform: scale(1.35);
    }
  </style>

  <style>
    .rating {
      unicode-bidi: bidi-override;
      direction: rtl;
    }

    .rating > span {
      display: inline-block;
      position: relative;
      width: 1.5em;
      font-size: 2.0em;
    }

    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
      content: "\2605";
      position: absolute;
      color: green;
    }
  </style>

  <style>
    .fa-star {
      font-size: 2em;
    }

    .checked {
      color: orange;
      font-size: 2em;
    }
  </style>

  <style>
    * {
      box-sizing: border-box;
    }

    .side {
      float: left;
      font-size: 18px;
      width: 15%;
      margin-top: 15px;
    }

    .middle {
      margin-top: 15px;
      float: left;
      width: 70%;
    }

    .right {
      text-align: center;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .bar-container {
      width: 100%;
      background-color: #f1f1f1;
      text-align: center;
      color: white;
    }

    @media (max-width: 400px) {
      .side, .middle {
        width: 100%;
      }

      .right {
        display: none;
      }
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">
</head>

<body onload="updateCartCount()">
<script src="js/main.js"></script>
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
<section class="col-sm-12">

  <div class="maintext">

    <a id="main-content"></a>

    <div class="region region-content">
      <section id="block-system-main" class="block block-system clearfix">

        <div
          class="view view-projectjuice-products-list view-id-projectjuice_products_list view-display-id-page view-dom-id-971c30b248302c0fcf57cdb0874a073c">

          <div class="view-content">
            <div class="views-row views-row-1 views-row-odd views-row-first product-row">

              <div class="col-sm-4 juice-list hidden-xs">
                <div class="field-header-image">
                  <div class="zoom">
                    <img src="images/fruity_deluxe.png" width="420" height="auto" alt=""/>
                  </div>
                </div>
                <div
                  class="view view-product-detail-page view-id-product_detail_page view-display-id-block view-dom-id-3227db141db4fa3e92ebd86e9ea288a9">
                  <div style="margin-left: 40px" ; class="view-header"> 5 JUICES PER DAY:<BR/></div>

                  <div class="view-content">
                    <div class="views-row views-row-1 views-row-odd views-row-first">


                      <div style="margin-left: 40px" ; class="field-associated-juice">
                        Punch
                      </div>
                    </div>
                    <div class="views-row views-row-2 views-row-even">


                      <div style="margin-left: 40px" ; class="field-associated-juice">
                        Blue Buzz 
                      </div>
                    </div>
                    <div class="views-row views-row-3 views-row-odd">


                      <div style="margin-left: 40px" ; class="field-associated-juice">
                        Matcha Tips
                      </div>
                    </div>
                    <div class="views-row views-row-4 views-row-even">


                      <div style="margin-left: 40px" ; class="field-associated-juice">
                        Deluxe Vibe
                      </div>
                    </div>
                    <div class="views-row views-row-5 views-row-odd">


                      <div style="margin-left: 40px" ; class="field-associated-juice">
                        Mint Deluxe
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-sm-4 organic">
                <h2>Fruity Deluxe</h2>

                <div class="visible-xs-block"><br/></div>

                <p style="margin-top: 20px; text-align: justify">
                  Enjoy the tangy notes of mulberries, lime, orange, grape juice and kala khatta in this tantalising beverage.
                  Processed under the cutting-edge manufacturing techniques, like carbon filtration and deionisation, these fruits canused to provide natural sweetness to the drinks in place of sucrose,
                  so you will still enjoy many wonderful flavours, despite no added sugar.
                </p>

                <link rel="stylesheet"
                      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <div style="margin-top: 50px">
                  <span class="fa fa-star checked" ; style="margin-left: 0px"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star " style="margin-right: 10px;"></span> (4.2 Average based on 188 reviews)
                </div>

                <hr style="border:3px solid #f1f1f1">

                <div class="row">
                  <div class="side">
                    <div>5 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div style="width: 95.3%; height: 18px; background-color: #4CAF50;"></div>
                    </div>
                  </div>
                  <div class="side right">112
                  </div>
                  <div class="side">
                    <div>4 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div style="width:  18.1%; height: 18px; background-color: #4CAF50;"></div>
                    </div>
                  </div>
                  <div class="side right">34
                  </div>
                  <div class="side">
                    <div>3 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div style="width: 11.7%; height: 18px; background-color: #4CAF50;"></div>
                    </div>
                  </div>
                  <div class="side right">22
                  </div>
                  <div class="side">
                    <div>2 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div style="width: 2.1%; height: 18px; background-color: #4CAF50;"></div>
                    </div>
                  </div>
                  <div class="side right">4
                  </div>
                  <div class="side">
                    <div>1 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div style="width: 8.5%; height: 18px; background-color: #4CAF50;"></div>
                    </div>
                  </div>
                  <div class="side right">16
                  </div>
                </div>

                <div class="visible-xs-block">
                  <div
                    class="view view-product-detail-page view-id-product_detail_page view-display-id-block view-dom-id-3227db141db4fa3e92ebd86e9ea288a9">
                    <div class="view-header">
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-4 cart-widget">
                <div class="panel panel-default">
                  <form class="commerce-add-to-cart commerce-cart-add-to-cart-form-166 add-to-cart-form-widget"
                        onsubmit="event.preventDefault();" method="post" id="commerce-cart-add-to-cart-form-418"
                        accept-charset="UTF-8">
                    <div><input type="hidden" name="form_build_id"
                                value="form-ucRTOV3A63GZBjqSDb5RQikIEycvZUEGsfJKT4ofKSY"/>
                      <input type="hidden" name="form_id" value="commerce_cart_add_to_cart_form_418"/>
                      <input id="product-base-price-418" class="product-base-price" type="hidden" name="base_price"
                             value="7500"/>

                      <div class="product-summary" data-clampedwidth=".add-to-cart-form-widget">
                        <h4 class="">Fruity Deluxe - $115.00 /Week </h4>

                      </div>
                      <div class="price-preview container-fluid ">


                        <div class="row">

                          <div style="margin-bottom: 10px; margin-top: 20px; margin-left: 5px" ;
                               class="col-xs-12 local-discount-copy">Discounts and coupons are applied at checkout based
                            upon delivery method selected.
                          </div>

                        </div>
                      </div>


                      <div class="modal fade" tabindex="-1" id="modal-commerce-cart-add-to-cart-form-418" role="dialog"
                           aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>


                            </div>
                            <div class="modal-body">
                              <div class="addon-products">
                                <div class="media">
                                  <div class="media">

                                  </div>
                                </div>
                                <div class="media">

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="add_on_product" value=""/>
                    <div class="cart-widget-row">
                      <div class="locals-discount-notice cart-widget-notice"></div>
                      <div id="cart-widget-messages"
                           class="cart-widget-warning cart-widget-notice alert alert-warning"></div>
                      <input type="hidden" name="quantity" value="1"/>
                      <button class="btn-block btn btn-default form-submit" id="edit-submit" name="op"
                              value="Add to cart" type="submit" onclick="addToCart(6)">Add to cart
                      </button>
                    </div>

                    <div class="rating text-left" ; style="margin-top: 20px; margin-left: 20px">
                      <p style="font-size: 14">Already tried this package? RATE IT NOW
                      <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5"/><label class="full" for="star5"
                                                                                       title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4"/><label class="full" for="star4"
                                                                                       title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3"/><label class="full" for="star3"
                                                                                       title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2"/><label class="full" for="star2"
                                                                                       title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1"/><label class="full" for="star1"
                                                                                       title="Sucks big time - 1 star"></label>
                      </fieldset>
                      </p>
                    </div>
                </div>

                </form>
              </div>
            </div>
          </div>
        </div>

      </section>
      <div style="font-weight: bold; margin-left:30px"> Related Products</div>

      <style>
        div.gallery {
          margin-left: 40px;
          margin-right: 1px;
          margin-bottom: 260px;
          float: left;
          width: 300px;
          height: 400px;
          background: rgb(255, 255, 255);
          box-shadow: 10px 10px 5px grey;
          font-size: 14px;
        }

        div.gallery h3 {
          font-size: 16px;
          font-weight: bold;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          margin-top: 10px;
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

        div.price {
          margin-top: 10px;
        }
      </style>
      <style>
        .dropbtn {
          background-color: #4CAF50;
          margin-bottom: 5px;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #9afa8d;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown-content a:hover {
          background-color: #faf600
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }

        .dropdown:hover .dropbtn {
          background-color: #3e8e41;
        }
      </style>

      <div class="gallery">
        <h3 style='margin-top: 30px; text-align: center'><a href="penta_delight.php"> Penta Delight </a></h3>
        <a target="_blank" href="penta_delight.php">
          <img src="images/penta_delight.png" alt="fruity_deluxe" width="600" height="400">
        </a>
        <div class="desc">The delight from five iconic fruits of JuiceEarth</div>
        <p class="price" style='text-align: center; font-weight: bold'>$120</p>

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .checked {
            color: orange;
          }
        </style>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span> (163 reviews)

        <div class="dropdown">
          <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
          <div class="dropdown-content">
            <a href="penta_delight.php">See More Details</a>
            <a href="#">Add To Cart</a>
          </div>
        </div>
      </div>

      <div class="gallery">
        <h3 style='margin-top: 30px; text-align: center'><a href="morning_cleanse.php"> Morning Cleanse </a></h3>
        <a target="_blank" href="morning_cleanse.php">
          <img src="images/morning_cleanse.png" alt="penta_delight" width="600" height="400">
        </a>
        <div class="desc">Once daily for a healthier and happier life</div>
        <p class="price" style='text-align: center; font-weight: bold'>$125</p>

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .checked {
            color: orange;
          }
        </style>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span> (268 reviews)

        <div class="dropdown">
          <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
          <div class="dropdown-content">
            <a href="morning_cleanse.php">See More Details</a>
            <a href="#">Add To Cart</a>
          </div>
        </div>
      </div>

      <div class="gallery">
        <h3 style='margin-top: 30px; text-align: center'><a href="detoxes.php"> Detoxes </a></h3>
        <a target="_blank" href="images/detoxes.png">
          <img src="images/detoxes.png" alt="Detox" width="600" height="400">
        </a>
        <div class="desc">A great choice of detoxification with five natural juices</div>
        <p class="price" style='text-align: center; font-weight: bold'>$130</p>

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .checked {
            color: orange;
          }
        </style>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span> (145 reviews)

        <div class="dropdown">
          <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
          <div class="dropdown-content">
            <a href="detoxes.php">See More Details</a>
            <a href="#">Add To Cart</a>
          </div>
        </div>
      </div>

      <div class="gallery">
        <h3 style='margin-top: 30px; text-align: center'><a href="rainbow_europhia.php"> Rainbow Euphoria </a></h3>
        <a target="_blank" href="images/rainbow_europhia.jpg">
          <img src="images/rainbow_europhia.jpg" alt="Rainbow Europhia " width="600" height="400">
        </a>
        <div class="desc">The intense happiness coming from natural ingredients</div>
        <p class="price" style='text-align: center; font-weight: bold'>$135</p>

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .checked {
            color: orange;
          }
        </style>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span> (210 reviews)

        <div class="dropdown">
          <button class="dropbtn" ; style="margin-left: 10px">Choose</button>
          <div class="dropdown-content">
            <a href="rainbow_europhia.php">See More Details</a>
            <a href="#">Add To Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="max-height: 250px; position: absolute; bottom: 0; min-width: 97vw;">
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
    <div class="genericContainer" id="copyrightFooter" style="background: #399E5A;">
      <p>&copy; 2019 Juice-Earth Ltd.</p>
    </div>
  </footer>
</section>
</body>
</html>

