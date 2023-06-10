<?php
session_start();
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
    <title> bySolitdio - Blog</title>

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
        require_once "php/header.inc.php";
        ?>

        <main class="main">
            <!--Categorie-->
            <section class="categorie-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="categorie-title">
                                <small>
                                    <a href="index.html">Home</a>
                                    <i class="fas fa-angle-right"></i>Livestyle
                                </small>
                                <h3 id="categoryH3">Category : <span>All</span> </h3>
                                <p>
                                    Welcome to the blog section, where all the posts will be present.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->

            <!--blog-grid-->
            <section class="blog-grid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 mt-30 side-content">
                            <div class="theiaStickySidebar">
                                <div class="row masonry-items" id="postsContainer">
                                    <!--Post-1-->
                                    <div class="col-lg-6 col-md-6 masonry-item">
                                        <div class="post-card ">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> food</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-2-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/20.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> travel</a>
                                                </div>
                                                <h5 class="entry-title">
                                                    <a href="post-default.html">get the most out of iceland with our 10 travel tips</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-3-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/29.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> interior</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-4-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> travel</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">get the most out of iceland with our 10 travel tips</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-5-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> food</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-6-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/24.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> interior</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-7-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/23.jpg" alt="">
                                                </a>

                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> travel</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->

                                    <!--Post-8-->
                                    <div class=" col-lg-6  col-md-6 masonry-item">
                                        <div class="post-card">
                                            <div class="post-card-image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/blog/1.jpg" alt="">
                                                </a>

                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog-grid.html" class="categorie"> interior</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="post-default.html">
                                                        7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.html"> <img src="assets/img/author/1.jpg" alt=""></a></li>
                                                    <li class="post-author"><a href="author.html">David Smith</a> </li>
                                                    <li class="post-date"> <span class="dot"></span> February 10, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/-->
                                </div>

                                <!--pagination-->
                                <!--<div class="row">
                                    <div class="col-lg-12">
                                        <div class="pagination ">
                                            <ul class="list-inline">
                                                <li class="active"> <a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-xl-3 max-width side-sidebar">
                            <div class="theiaStickySidebar">

                                <!--widget-latest-posts-->
                                <div class="widget ">
                                    <div class="section-title">
                                        <h5>Latest Posts</h5>
                                    </div>
                                    <ul class="widget-latest-posts" id="latestPosts">

                                        <li class="post-item">
                                            <div class="image">
                                                <a href="post-default.html"> <img src="assets/img/latest/1.jpg" alt="..."></a>
                                            </div>
                                            <div class="count">1</div>
                                            <div class="content">
                                                <p class="entry-title"><a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a></p>
                                                <small class="post-date"><i class="fas fa-clock"></i> January 15, 2022</small>
                                            </div>
                                        </li>

                                        <li class="post-item">
                                            <div class="image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/latest/2.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="count">2</div>
                                            <div class="content">
                                                <p class="entry-title"><a href="post-default.html">Everything you need to know about visiting the Amazon.</a></p>
                                                <small class="post-date"><i class="fas fa-clock"></i> January 15, 2022</small>
                                            </div>
                                        </li>

                                        <li class="post-item">
                                            <div class="image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/latest/3.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="count">3</div>
                                            <div class="content">
                                                <p class="entry-title">
                                                    <a href="post-default.html">How to spend interesting vacation after hard work?</a>
                                                </p>
                                                <small class="post-date"> <i class="fas fa-clock"></i> January 15, 2022</small>
                                            </div>
                                        </li>

                                        <li class="post-item">
                                            <div class="image">
                                                <a href="post-default.html">
                                                    <img src="assets/img/latest/4.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="count">4</div>
                                            <div class="content">
                                                <p class="entry-title">
                                                    <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
                                                </p>
                                                <small class="post-date"> <i class="fas fa-clock"></i> January 15, 2022</small>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <!--/-->

                                <!--widget-categories-->
                                <div class="widget">
                                    <div class="section-title">
                                        <h5>Categories</h5>
                                    </div>
                                    <ul class="widget-categories" id="categoriesLinks">
                                        <li>
                                            <a href="#" class="categorie">Livestyle</a>
                                            <span class="ml-auto">22 Posts</span>
                                        </li>
                                        <li>
                                            <a href="#" class="categorie">Travel</a>
                                            <span class="ml-auto">18 Posts</span>
                                        </li>
                                        <li>
                                            <a href="#" class="categorie">Food</a>
                                            <span class="ml-auto">14 Posts</span>
                                        </li>
                                        <li>
                                            <a href="#" class="categorie">fashion</a>
                                            <span class="ml-auto">10 Posts</span>
                                        </li>
                                        <li>
                                            <a href="#" class="categorie">interior</a>
                                            <span class="ml-auto">14 Posts</span>
                                        </li>
                                        <li>
                                            <a href="#" class="categorie">art & design</a>
                                            <span class="ml-auto">10 Posts</span>
                                        </li>

                                    </ul>
                                </div>

                                <!--widget-instagram-->


                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->

            <!--newslettre-->
            <?php
            require_once "php/newsletter.inc.php";
            ?>
        </main>

        <!--footer-->
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
    <script>
        const queryString = window.location.search
        const urlParams = new URLSearchParams(queryString)
        const category = urlParams.get('category')
        // Check or set sessonStorage Post
        if (!sessionStorage.getItem("solitdioPosts")) {
            $.post("php/posts/getAllPosts.inc.php", {
                getAllPostsSubmit: "action"
            }, function(data) {
                if (!isJson(data)) {
                    feedBack(data, "error")
                } else {
                    sessionStorage.setItem("solitdioPosts", data)

                }

            })
        }
        // Initialize All Categoires in local storage
        if (!sessionStorage.getItem("solitdioCategories")) {
            $.post("php/category/getAllCategory.inc.php", {
                getAllCategorySubmit: "action"
            }, function(data) {
                if (isJson(data)) {
                    sessionStorage.setItem('solitdioCategories', data)
                }
            })
        }

        const categories = JSON.parse(sessionStorage.getItem("solitdioCategories"))
        const posts = JSON.parse(sessionStorage.getItem("solitdioPosts"))
        const postsContainer = document.getElementById("postsContainer")
        postsContainer.innerHTML = ``
        chosenPosts = category ? posts.filter(post => post.category == category) : posts
        if (category) {
            document.getElementById("categoryH3").innerHTML = `Category : <span> ${categories.filter(cat => cat.id == category)[0].name} </span> `
        }
        displayPosts(chosenPosts)
        //Latest Posts
        const latestPosts = document.getElementById("latestPosts")
        let limit
        if (posts.length < 5) {
            limit = posts.length
        } else {
            limit = 5
        }
        latestPosts.innerHTML = ``
        for (let i = 0; i < limit; i++) {
            const li = document.createElement("li")
            li.classList.add("post-item")
            li.innerHTML = `
                 <div class="image">
                                                <a href="postDetails.php?id=${posts[i].id}"> <img src="${posts[i].img}" alt="${posts[i].name}"></a>
                                            </div>
                                           
                                            <div class="content">
                                                <p class="entry-title"><a href="postDetails.php?id=${posts[i].id}">${posts[i].name}</a></p>
                                                <small class="post-date"><i class="fas fa-clock"></i>${posts[i].created_at.slice(0,15)}</small>
                                            </div>
                `
            latestPosts.appendChild(li)

        }

        // Categories links
        const categoriesLinks = document.getElementById("categoriesLinks")
        categoriesLinks.innerHTML = ``
        categories.forEach(category => {
            //console.log(category.id)
            const postCount = posts.filter(post => post.category == category.id).length
            const li = document.createElement("li")
            li.innerHTML = `
                 <li>
                    <a href="#" class="categorie">${category.name}</a>
                    <span class="ml-auto">${postCount} Posts</span>
                    </li>
                `
            categoriesLinks.appendChild(li)
        })



        function displayPosts(posts) {
            posts.forEach(post => {
                $.post("php/users/getAuthor.inc.php", {
                    getAuthorSubmit: "action",
                    id: post.author
                }, function(data) {
                    if (isJson(data)) {
                        const author = JSON.parse(data)[0]
                        const authorImg = author.img ? author.img : "assets/img/user/profile.webp"
                        const category = categories.filter(category => category.id == post.category)[0]
                        const div = document.createElement("div")
                        div.classList = "col-lg-6 col-md-6 masonry-item"
                        div.innerHTML =
                            `
                        <div class="post-card ">
                                            <div class="post-card-image">
                                                <a href="postDetails.php?id=${post.id}">
                                                    <img src="${post.img}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card-content">
                                                <div class="entry-cat">
                                                    <a href="blog.php" class="categorie"> ${category.name}</a>
                                                </div>

                                                <h5 class="entry-title">
                                                    <a href="postDetails.php?id=${post.id}">${post.name}</a>
                                                </h5>

                                                <div class="post-exerpt">
                                                    <p>${post.intro}... </p>
                                                </div>

                                                <ul class="entry-meta list-inline">
                                                    <li class="post-author-img"><a href="author.php"> <img src="${authorImg}" alt=""></a></li>
                                                    <li class="post-author"><a href="author.php">${author.username}</a> </li>
                                                    <li class="post-date"> <span class="dot"></span>${post.created_at.slice(0,15)}</li>
                                                </ul>
                                            </div>
                                        </div>
                        `
                        postsContainer.appendChild(div)

                    }
                })

            })
        }
        //UI Functions
        function feedBack(message, type) {
            if (type === 'error' || type === 'success') {
                Swal.fire('feedBack', message, type)
            } else {
                Swal.fire('feedBack', 'Type error in feddback!', 'error')
            }
        }

        function isJson(item) {
            item = typeof item !== 'string' ? JSON.stringify(item) : item

            try {
                item = JSON.parse(item)
            } catch (e) {
                return false
            }

            if (typeof item === 'object' && item !== null) {
                return true
            }

            return false
        }
    </script>


</body>

<!-- Mirrored from demo-noonpost.assiagroupe.net/html/blog-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 09:28:41 GMT -->

</html>