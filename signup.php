<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap1.min.css" type="text/css">
  






</head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <center>  <h1><b>SIGN UP</b></h1> </center>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                            <center>
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                                <center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Nanay Lucy L.M Tuala Lambanog. All Rights Reserved. | Contact Us: 09123456789</p>
                
               </center>
               </div>
           </footer>

        </div>
        
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
