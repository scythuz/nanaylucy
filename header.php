
<html lang="en">
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <div class="header-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 text-center">
          <a href="index.php" class="site-logo">
            <img src="img/logo.png" alt="Image" class="img-fluid">
          </a>
        </div>
        <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
              class="icon-menu h3"></span></a>
      </div>
    </div>
    


    
    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

    <div class="container">
      <div class="d-flex align-items-center">
        
        <div class="mx-auto">
          <nav class="site-navigation position-relative text-left" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
              
 

              <?php
                           if(isset($_SESSION['email'])){
                           ?>
                            <li class="active"><a href="index.php" class="nav-link text-left">Home</a></li>
                            <li><a href="products.php" class="nav-link text-left"> Shop</a></li>
                            <li><a href="cart.php" class="nav-link text-left"> Cart</a></li>
                        <!--   <li><a href="settings.php" class="nav-link text-left"></span> Change Password</a></li>  -->
                           <li><a href="profile.php" class="nav-link text-left">Profile</a></li>
                           <li><a href="about.php" class="nav-link text-left">About</a></li>
                           <li><a href="contact.php" class="nav-link text-left">Contact</a></li>
                           <li><a href="logout.php" class="nav-link text-left"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                              <li class="active"><a href="index.php" class="nav-link text-left">Home</a></li>
                              <li><a href="products.php" class="nav-link text-left"> Shop</a></li>
                              <li><a href="about.php" class="nav-link text-left">About</a></li>
                              <li><a href="contact.php" class="nav-link text-left">Contact</a></li>
                            <li><a href="signup.php" class="nav-link text-left"></span> Sign Up</a></li>
                           <li><a href="login.php" class="nav-link text-left"></span> Login</a></li>
                         
                           <?php
                           }
                           ?>
                           
              
            </ul>                                                                                                                                                                                                                                                                                         
          </nav>

        </div>
       
      </div>
    </div>

  </div>
  
  </div>
