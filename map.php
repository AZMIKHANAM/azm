<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />


  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <title>FoodOrderingSystem-Map</title>

    <style>
    body{
      background-color: rgba(19,91,142,1);
    }
    .head{
      font-weight: bold;
       background-image: url("Big-top-image.jpg");
       height : 400px;
       color: white;
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center center;
       text-align: center;
       box-sizing: border-box;
       font-family: Courier New, serif ;
       padding-top: 100px;
       border-style: inset;



      }

     .innerHead{
      width: 400px;
      height: 190px;
      border-radius: 10px;
      background-color:#CB202D;
      display: inline-block;
      padding-top: 50px;
     }


      .images img{
        margin-top: 40px;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        margin-left: 25px;
      }

      .jumbo{
        margin-top: 50px;
      }

      .footer{
        position: relative;
        margin: 0;
      }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 20%;
        width: 50%;
        margin: auto;

      }
      /* Optional: Makes the sample page fill the window. */
      php, body {
        height: 150%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 195%;
        left: 46%;
        z-index: 5;
        background-color: #fff;
        /* padding: 5px; */
        border: 1px solid #00ffd0;
        text-align: center;
        font-family: 'Roboto','sans-serif';

        /* line-height: 30px; */
        /* padding-left: 10px; */
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
      <img src="logo.jpg" width="30" height="30" alt="">
    </a>

    <a class="navbar-brand" href="changedfront.php">FoodOrderingSystem</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item ">
        <a class="nav-link" href="changedfront.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="menu.php">Menu</a>
      </li><!--
      <li class="nav-item">
        <a class="nav-link " href="order.php">Order</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="booking.php">Booking</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="reviews.php">Reviews</a>
      </li>

        <li class="nav-item">
        <a class="nav-link active" href="map.php">Map<span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    <li class="nav-item" style="width: 500px;">

      </li>
       <?php


        if (isset($_SESSION['username'])) {
          echo "<th>hello  </th>".$_SESSION['username'];echo('<form action="logout.php" method="get">');

 echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

          echo('<input type="submit" value="LOGOUT">');
         echo('</form>');
        }
        else{

          ?>
             <li class="nav-item">
             <a class="nav-link " href="contact.php">Sign Up</a>
            </li>

            <li class="nav-item">
            <a class="nav-link " href="sign.php">Log In</a>
           </li>



          <?php

        }
        ?>
</ul>
      </div>
  </nav>

     <div class="head">
      <div class="innerHead">
       <h1 style="font-size: 70px;">REACH US </h1>
     </div>
     </div>


    <br>

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="pic1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">FoodOrderingSystem Refreshers</h5>
          <p class="card-text">No.19 Community Centre Market<br>New Friends Colony, Block A, New Delhi <br>Delhi-110025<br>1800110075, 01124352435, 01124312431<br>info@FoodOrderingSystem.com<br>Mon-Sun:??10:00 am - 10:00 pm</p>

        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="pic2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">FoodOrderingSystem Sunshine</h5>
          <p class="card-text">Shop No. F-17, near Metro Pillar No. 54<br>Vikas Marg, Laxmi Nagar, New Delhi <br>Delhi-110092<br>1800110075, 01124352435, 01124312431<br>info@FoodOrderingSystem.com<br>Mon-Sun:??10:00 am - 10:00 pm</p>

        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="pic3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">FoodOrderingSystem Fiesta</h5>
          <p class="card-text">C - 67, Okhla Industrial Area<br>Phase 1, New Delhi <br>Delhi-110201<br>1800110075, 01124352435, 01124312431<br>info@FoodOrderingSystem.com<br>Mon-Sun:??10:00 am - 10:00 pm</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="pic4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">FoodOrderingSystem Ocean-view</h5>
          <p class="card-text">2, Main Market <br>Sunder Nagar, New Delhi <br>Delhi-110003<br>1800110075, 01124352435, 01124312431<br>info@FoodOrderingSystem.com<br>Mon-Sun:??10:00 am - 10:00 pm</p>

        </div>
      </div>
    </div>
<br>
<div id="floating-panel">
  <button id="drop" onclick="drop()">Pin Locations</button>
</div>
<div id="map"></div>
<script>

  // If you're adding a number of markers, you may want to drop them on the map
  // consecutively rather than all at once. This example shows how to use
  // window.setTimeout() to space your markers' animation.

  var neighborhoods = [
    {lat: 28.602874, lng: 77.240968},
    {lat: 28.527759, lng: 77.275768},
    {lat: 28.638212, lng: 77.284128},
    {lat: 28.565647, lng: 77.267932}
  ];

  var markers = [];
  var map;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {lat: 28.593154, lng: 77.272786}
    });
  }

  function drop() {
    clearMarkers();
    for (var i = 0; i < neighborhoods.length; i++) {
      addMarkerWithTimeout(neighborhoods[i], i * 200);
    }
  }

  function addMarkerWithTimeout(position, timeout) {
    window.setTimeout(function() {
      markers.push(new google.maps.Marker({
        position: position,
        map: map,
        animation: google.maps.Animation.DROP
      }));
    }, timeout);
  }

  function clearMarkers() {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(null);
    }
    markers = [];
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqsMfztzmmdDiF9tyCOXi84dE3ybEWWj8&callback=initMap">
</script>

<br>

<footer class="footer-distributed">

      <div class="footer-left">

 <a class="navbar-brand" href="changedfront.php" style="display: inline-block;">
    <img src="logo.jpg" width="50" height="50" alt="">
  </a>
        <h3 style="display: inline-block;">FoodOrderingSystem<span>Restaurant</span></h3>

        <p class="footer-links">

          <a href="changedfront.php">Home</a>
          ??
          <a href="menu.php">Menu</a>
          ??
          <a href="order.php">Order</a>
          ??
          <a href="about.php">About</a>
          ??
          <a href="sign.php">LogIn</a>
          ??
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 New Colony Street</span> Lucknow, UP, India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1 555 123456</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@FoodOrderingSystem.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Thank You for Visiting</span>
          We, at FoodOrderingSystem thank you from the bottom of our hearts for visiting our page and showing interest in our restaurant. We hope to hear from you again, soon.
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.github.com"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>




       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
