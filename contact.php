<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="shortcut icon" href="img/logo.png" />
<title>Nanay Lucy &mdash; L.M Tuala Lambanog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="backup/fonts/icomoon/style.css">
<link rel="stylesheet" href="backup/css/bootstrap.min.css">
<link rel="stylesheet" href="backup/css/jquery-ui.css">
<link rel="stylesheet" href="backup/css/owl.carousel.min.css">
<link rel="stylesheet" href="backup/css/owl.theme.default.min.css">
<link rel="stylesheet" href="backup/css/owl.theme.default.min.css">
<link rel="stylesheet" href="backup/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="backup/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="backup/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="backup/css/aos.css">
<link href="backup/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="backup/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <?php
            require 'header.php';
           ?>

    <div class="hero-2" style="background-image: url('img/hero_2.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Get In Touch</span>
            <h2>Contact</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Contact Us</h2>
            </div>
            <form action="connect.php" method="post">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="fname">First Name</label>
                          <input type="text" id="fname" class="form-control form-control-lg" name="fname" />
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" id="lname" class="form-control form-control-lg" name="lname" />
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="email">Email Address</label>
                          <input type="text" id="email" class="form-control form-control-lg" name="email" />
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="number">Phone Number</label>
                          <input type="number" id="number" class="form-control form-control-lg" name="number" />
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
							  <label for="msg">Message</label>
							  <textarea type="text" id="msg" class="form-control form-control-lg" name="msg" rows="5" cols="33"></textarea>
							
                         </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

  

    
    
    <div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
  
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

 
<script src="backup/js/jquery-3.3.1.min.js"></script>
<script src="backup/js/jquery-migrate-3.0.1.min.js"></script>
<script src="backup/js/jquery-ui.js"></script>
<script src="backup/js/popper.min.js"></script>
<script src="backup/js/bootstrap.min.js"></script>
<script src="backup/js/owl.carousel.min.js"></script>
<script src="backup/js/jquery.stellar.min.js"></script>
<script src="backup/js/jquery.countdown.min.js"></script>
<script src="backup/js/bootstrap-datepicker.min.js"></script>
<script src="backup/js/jquery.easing.1.3.js"></script>
<script src="backup/js/aos.js"></script>
<script src="backup/js/jquery.fancybox.min.js"></script>
<script src="backup/js/jquery.sticky.js"></script>
<script src="backup/js/jquery.mb.YTPlayer.min.js"></script>




<script src="backup/js/main.js"></script>


    </body>

</html>