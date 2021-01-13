<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
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
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
