<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location: admin.php");
}
?>
<!doctype html>
<html lang="en">



<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> bySolitdio - Login </title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v='<?php echo time(); ?>'">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>

<body>
    <!-- wrapper -->
    <div id="wrapper" class="wrapper">
        <!--loading -->
        <div class="loading">
            <div class="circle"></div>
        </div>
        <!--/-->

        <!-- Header -->
        <?php
        require_once "php/header.inc.php";
        ?>
        <main class="main">
            <!--register-->
            <section class="mt-60  mb-60">
                <div class="container-fluid">
                    <div class="sign widget">
                        <div class="section-title">
                            <h5>Sign up</h5>
                        </div>

                        <form class="sign-form widget-form" id="registerForm">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Username*" id="username" value="" required>
                            </div>
                            <div class="form-group">

                                <input type="email" class="form-control" placeholder="Email Address*" id="email" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password*" id="pwd" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password*" id="confirmPwd" value="" required>
                            </div>
                            <div class="sign-controls form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="acceptTerms" required>
                                    <label class="custom-control-label" for="rememberMe">Agree to our <a href="#" class="btn-link">terms & conditions</a> </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-custom" id="registerSubmit">Sign Up</button>
                            </div>
                            <p class="form-group text-center">Already have an account? <a href="login.php" class="btn-link">Login</a> </p>
                        </form>
                    </div>
                </div>
            </section>

            <!--newslettre-->
            <?php
            require_once "php/newsletter.inc.php"
            ?>

        </main>
        <?php
        require_once "php/footer.inc.php";
        ?>

        <!--Search-form-->
        <div class="search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                        <div class="search-width  text-center">
                            <button type="button" class="close">
                                <i class="fas fa-times"></i>
                            </button>
                            <form class="search-form" action="#">
                                <input type="search" value="" placeholder="What are you looking for?">
                                <button type="submit" class="search-btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/-->
    </div>


    <!--plugins -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/masonry.min.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/ajax-contact.js"></script>
    <script src="assets/js/switch.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>
    <script src="customJS/register.js?v='<?php echo time(); ?>'"></script>


</body>


</html>