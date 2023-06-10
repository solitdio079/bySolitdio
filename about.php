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
    <title> bySolitdio - About us </title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
        require_once "php/header.inc.php"
        ?>


        <main class="main ">
            <!--about-us-->
            <section class=" mt-90 mb-10">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl-9 m-auto">
                            <div class="about-us">
                                <!-- <div class="about-us-image">
                                    <img src="assets/img/pic/fun.webp" width="80%" alt="">
                                </div>-->
                                <div class="description">
                                    <p>bySolitdio is a web development company founded by Djoko Keita and Fily Sakine, its goal is to create a digital portfolio filled with valuable projects
                                        and educate while inspiring young people around the world particularly the african youth.
                                    </p>
                                    <p>
                                        We created this blog to showcase our capabilities while collaborating with anyone interested in our work. You can join us by creating an account here and contact us via WhatsApp or form here even.
                                        We will be glad to welcome anyone who agrees with the following philosophy.
                                    </p>

                                    <div class="quote">
                                        <div>
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <h3>
                                            "Not there yet”
                                        </h3>
                                        <small>Djoko Keita.</small>
                                    </div>
                                    <p>
                                        Our main philosophy is based on the process/event dichotomy explained by MJ DeMarco in his book "Unscripted".Basically, there a process behind every event you see, every product, every success, every failure you can think of hides a process behind.
                                        Our philosophy is to use that dichotomy effectively in order to get our desired result.
                                    </p>
                                    <p>
                                        This blog is here to document our process and in doing so inspire the next person to forget all their excuses and trust that God is in control.
                                        Let's make the world a better place by giving it our best.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--newslettre-->
            <?php
            require_once "php/newsletter.inc.php"
            ?>
        </main>

        <!--footer-->
        <?php
        require_once "php/footer.inc.php"
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

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>


</body>


</html>