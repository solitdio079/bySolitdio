 <header class="header fixed-top">
     <div class="header-main navbar-expand-xl">
         <div class="container-fluid">
             <div class="header-main">
                 <!-- logo -->
                 <div class="site-branding">
                     <a class="dark-logo" href="index.php">
                         <img src="assets/img/logo/logo-dark.png" width="175" alt="">
                     </a>
                     <a class="light-logo" href="index.php">
                         <img src="assets/img/logo/logo-white.png" width="175" alt="">
                     </a>
                 </div><!--/-->

                 <div class="main-menu header-navbar">
                     <nav class="navbar">
                         <!--navbar-collapse-->
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             <ul class="navbar-nav ">
                                 <!--Homes -->
                                 <li class="nav-item">
                                     <a class="nav-link active" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="blog.php">Blog</a>
                                 </li>
                                 <?php
                                    if (!isset($_SESSION["user"])) { ?>
                                     <li class="nav-item">
                                         <a class="nav-link" href="login.php">Sign In</a>
                                     </li>
                                 <?php } else {
                                    ?>
                                     <li class="nav-item">
                                         <a class="nav-link" href="admin.php">Account</a>
                                     </li>
                                 <?php
                                    }
                                    ?>
                                 <li class="nav-item">
                                     <a class="nav-link" href="about.php">About us</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="author.php">Author</a>
                                 </li>
                                 <!--contact -->
                                 <li class="nav-item">
                                     <a class="nav-link" href="contact.html"> contact </a>
                                 </li>
                                 <?php
                                    if (isset($_SESSION["user"])) { ?>
                                     <li class="nav-item">
                                         <a href="php/users/logout.inc.php" class="btn-custom">Logout</a>
                                     </li>
                                 <?php }
                                    ?>
                             </ul>
                         </div>
                         <!--/-->
                     </nav>
                 </div>

                 <!-- header actions -->
                 <div class="header-action-items">
                     <!--header-social-->
                     <ul class="header-social list-inline">
                         <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     </ul>

                     <!--theme-switch-->
                     <div class="theme-switch-wrapper switch-icon">
                         <label class="theme-switch" for="checkbox">
                             <input type="checkbox" id="checkbox">
                             <span class="slider round ">
                                 <i class="lar la-sun icon-light"></i>
                                 <i class="lar la-moon icon-dark"></i>
                             </span>
                         </label>
                     </div>

                     <!--search-icon-->
                     <div class="search-icon"> <a href="#search"> <i class="fas fa-search"></i></a></div>

                     <!--navbar-toggler-->
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </header><!--/-->