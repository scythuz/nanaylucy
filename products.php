<?php
    session_start();
    require 'check_if_added.php';
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
    <!-- jquery library -->
 
    <!-- Latest compiled and minified javascript -->
 
    <!-- External CSS -->
  






</head>

    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                <center>
                    <h1>Welcome to Nanay Lucy Lambanog</h1>
                    <p>Lopez Lambanog</p>
                    </center>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/wine_1.png" alt="PUre Natural Lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pure Natural Lambanog 1000ml</h3>
                                    <p>Price: ₱40.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/wine_2.png" alt="Grape Flavor Lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Grape Flavor Lambanog 1000ml</h3>
                                    <p>Price: ₱45.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/wine_3.png" alt="Orange Flavor Lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Orange Flavor Lambanog 1000ml</h3>
                                    <p>Price: ₱45.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/smol_1.jpg" alt="Pure Natural Lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pure Natural Lambanog 500ml</h3>
                                    <p>Price: ₱20.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/smol.jpg" alt="grape flavor lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Grape Flavor Lambanog 500ml</h3>
                                    <p>Price: ₱25.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/smol_2.jpg" alt="Orange Flavor Lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Orange Flavor Lambanog 500ml</h3>
                                    <p>Price: ₱25.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="products.php">
                                <img src="img/imgg.JPG" alt="pure natural lambanog">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pure Natural Lambanog 5000ml</h3>
                                    <p>Price: ₱200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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
