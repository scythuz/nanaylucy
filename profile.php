<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select id, name, email, contact, city, address from users where id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
  
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

        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap1.min.css" type="text/css">
        <!-- jquery library -->
     
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <br>
            <br>
           
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>

                       <?php 
                        if($result = mysqli_query($con,$user_products_query)){
                            if(mysqli_num_rows($user_products_result) > 0){
                                ?>
                            
                                     <tr>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Contact</th>
                                         <th>City</th>
                                         <th>Address</th>
                                    </tr>
                        <?php
                                while($row = mysqli_fetch_array($user_products_result)){
                                
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['contact'] . "</td>";
                                        echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                    echo "</tr>";
                                }
                                
                                mysqli_free_result($user_products_result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                        }
                          
                        ?>
              </tr>
                    </tbody>
                </table>
            </div>

            </div>
            <br>
            <center>
            <a href="settings.php?id=<?php echo $user_id?>" class="btn btn-primary">Change Password</a>
            </center>


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
