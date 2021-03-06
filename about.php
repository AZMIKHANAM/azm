<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();


?>
<!doctype html>
<html lang="en">
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


    <title>FoodOrderingSystem-About</title>


    <style type="text/css">
    *{
      padding: 0px;
      margin: 0px;
    }
    body{
      background-color: #e5ff58}


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
      margin: 0;
    }


    .image {
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }
    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      /* top: 50%; */
      /* left: 50%; */
      transform: translate(80%, -300%);
      /* -ms-transform: translate(-50%, -50%); */
      /* text-align: center; */
    }

    .container:hover .image {
      opacity: 0.3;
    }

    .container:hover .middle {
      opacity: 1;
    }

    .text {
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      padding: 16px 32px;
    }

   </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="changedfront.php">
    <img src="logo.jpg" width="30" height="30" alt="">
  </a>

  <a class="navbar-brand" href="#">Food Order</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="changedfront.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu </a>
      </li><!--
      <li class="nav-item">
        <a class="nav-link" href="order.html">Order </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="booking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="reviews.php">Reviews</a>
      </li>

        <li class="nav-item">
        <a class="nav-link " href="map.php">Map</a>
      </li>


      <li class="nav-item">
        <a class="nav-link active" href="about.php"><span class="sr-only">(current)</span>About Us</a>
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
     <h1 style="font-size: 70px;">ABOUT US </h1>
   </div>
   </div>

   <br>
   <table style="padding: 20px">
     <tr>
       <td width="100%" height="100vh"  style="background-color: rgba(234,109,109,0.38); padding:20px">
         Is it any surprise that our restaurant occupies the Number One slot on the list of India???s top 50 restaurants? From the drinks to the desserts, Chef Mehrotra???s reinterpretation of nostalgic Indian dishes using global cues has inspired an entire generation of Indian chefs to innovate. Think marigold cocktail (with dark rum, fresh lime, cranberry and orange juice), meetha achaar pork spare ribs that come with sundried mango and pickled kohlrabi and literally fall off the bone, and tandoori bacon prawns with wasabi malai. The restaurant recently renovated, the interiors include three private dining rooms and stunning photographs of the city???s medieval monuments and the beautiful Lodhi Gardens. With a branch soon in New York and London, his inventive restaurant is earning critical acclaim globally, making sure the rest of the world develops an Indian accent.
   Chef Mehrotra prefers to use fresh, seasonal and local produce wherever possible and often travels to small towns and villages to source his ingredients. In fact, a family in Kolhapur even makes some specialised masalas for the restaurant. Indian Accent also receives fresh, organically grown root vegetables and micro greens from farmers around the country and mostly use cold-pressed mustard oil, house-made ghee and fresh coconut oil in its cooking.
       </td>
     </tr>
   </table>
<!-- <br>
<br>
   <table  style="position: 300px; top: 800; bottom: 0; left: 100; right: 0;padding: 10px" cellspacing="10">
       <tr>
         <td width="300px" height="300px"  style="background-color: rgba(0,0,0,0.38)">
           <div class="outer" >
             <div class="container">
               <img src="Affan.jpg" class="image" style="width:100%">
               <div class="middle">
                 <div class="text">Affan</div>
               </div>
             </div>
           </td>
           <td width=75% style="background-color: rgba(0,0,0,0.10)">
             <div class="right" style="padding:20px;">
   Affan is the most famous and commended face as the most favorite among top 10 chefs in India. She makes one of the most mouth watering dishes, and makes combinations out of this world. Her creativity is applaudible. Her amazing work amazes everyone in India and the world. She has great name in Indian food today. She is a professional Chef, works for an effective TV Channel ???FoodFood???. Affan is among most popular top ten chefs in India. She is the writer of top cookbooks, owner of famous restaurateur and have won many food competitions. Her dream is to make Indian food the most obvious around the world and engaging Indian???s through cooking to wind up independent life. She is known as the ???Best Chef of India???. This award was given to her by the Government of India.
   Most popular chef among the top 10 chefs in India is chosen as Indian ambassador for the United States Clean Cook stoves for the fashioning nations.
               </div>
           </div>
         </td>
       </tr>


       <tr>
         <td width="300px" height="300px"  style="background-color: rgba(0,0,0,0.38)">
           <div class="outer">
             <div class="container">
               <img src="aru.jpg" class="image" style="width:100%">
               <div class="middle">
                 <div class="text">Aman</div>
               </div>
             </div>
           </td>
           <td width=75% style="background-color: rgba(0,0,0,0.10)">
             <div class="right" style="padding:20px;">
               Aman has been on of the commended faces in the most favorite among top 10 chefs in India. She has great name in Indian food today. She is a professional Chef, works for an effective TV Channel ???FoodFood???. Aman is among most popular top ten chefs in India. She is the writer of top cookbooks, owner of famous restaurateur and have won many food competitions. Her dream is to make Indian food the most obvious around the world and engaging Indian???s through cooking to wind up independent life. She is known as one of the Best Chefs in India. This award was given to her by the Government of India, which she prestigiously accepted. She has a huge fan following and is extermely popular.
               Most popular chef among the top 10 chefs in India is chosen as Indian ambassador for the United States Clean Cook stoves for the fashioning nations.
   </div>
           </div>
         </td>
       </tr>



     </div>
   </table>
   <br>
   <br>
 -->


<footer class="footer-distributed">

      <div class="footer-left">

 <a class="navbar-brand" href="changedfront.html" style="display: inline-block;">
    <img src="logo.jpg" width="50" height="50" alt="">
  </a>
        <h3 style="display: inline-block;">Food Ordering<span>Restaurant</span></h3>

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
