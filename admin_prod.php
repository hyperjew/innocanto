<?php
include "conn.php";
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Innocanto</title>
  <link rel="icon" href="images/innologo.png" sizes="96x96" type="image/png">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
              Innocanto
            </span>
          </a>
          <!-- SEARCH 
          <div class="" id="">
            <div class="User_option">
              
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            
              <a href="">
                <img src="images/bag.png" alt="">
              </a>
            </div>-->

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="admin.php">Home</a>
                <a href="admin_prod.php">Products</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="img-box">
            <img src="images/prod.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Katy Perry-MEOW!
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/prod2.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Incanto Shine
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/prod3.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Vanilla Lace
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/prod4.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Guess Men
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/prod5.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Guess Women
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/prod6.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Bvlgari Omnia Amethyste
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_social-container">
        <h5>
          Follow Us
        </h5>
        <div class="info_social">
          <div>
            <a href="https://www.facebook.com/innocanto.perfume">
              <img src="images/facebook-logo-button.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            About Innocanto
          </h6>
          <p>
            INNOCANTO Perfume is inspired by original scents. It is 100% oil based, it is proven and tested with very affordable price.
          </p>
        </div>
        <div class="col-md-2 offset-lg-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="admin_prod.php">Products </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a>
              <img src="images/location-white.png" alt="">
              <span> Benigno S. Aquino Ave, Baliwag, 3006 Bulacan</span>
            </a>
            <a>
              <img src="images/call-white.png" alt="">
              <span>+63 9551005048</span>
            </a>
            <a>
              <img src="images/mail-white.png" alt="">
              <span> innocantoscents@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Innocanto Perfume. All Rights Reserved. 
      </p>
       <!-- Design by
        <a href="https://html.design/">GARCIA</a> -->
    </div>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>