<?php
session_start();
if (!isset($_GET["id"])) {
    header("Location: login.php");
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
    <title> bySolitdio - Post Details</title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">

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
            <!--post-default-->
            <section class="mt-60  mb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 side-content">
                            <div class="theiaStickySidebar">
                                <!--Post-single-->
                                <div class="post-single">
                                    <div class="post-single-image">
                                        <img src="assets/img/blog/2.jpg" alt="" id="postMainImg">
                                    </div>
                                    <div class="post-single-content">
                                        <a href="#" class="categorie" id="postCategoryDisp">travel</a>
                                        <h3 class="title" id="postTitle">What The Secrets You Will know about Jordan Petra if Visit it One Day? </h3>
                                        <ul class="entry-meta list-inline">
                                            <li class="post-author-img"><a href="author.php"> <img src="assets/img/author/1.jpg" id="authorImg" alt=""></a></li>
                                            <li class="post-author"><a href="author.php" id="authorName">David Smith</a> </li>
                                            <li class="post-date" id="postDate"> <span class="dot"></span> February 10, 2022</li>
                                            <!-- <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                            <li class="post-comment"> <span class="dot"></span> 2 comments</li>-->
                                        </ul>

                                    </div>

                                    <div class="post-single-body" style="text-align:left;" id="postBody">
                                    </div>

                                    <div class="post-single-footer">
                                        <div class="tags">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="blog-grid.html">Travel</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">Nature</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">tips</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">forest</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">beach</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="social-media">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="#" class="color-facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="color-instagram">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="color-twitter">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="color-youtube">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="color-pinterest">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!--/-->

                                <!--next & previous-posts-->
                                <!--  <div class="row">
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-next-post">
                                                <div class="post-item">
                                                    <div class="image">
                                                        <a href="post-default.html"> <img src="assets/img/latest/1.jpg" alt="..."></a>
                                                    </div>

                                                    <div class="content">
                                                        <a class="btn-link" href="post-default.html"><i class="fas fa-arrow-left"></i>Preview post</a>
                                                        <p class="entry-title"><a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a></p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-previous-post">
                                                <div class="post-item">
                                                    <div class="image">
                                                        <a href="post-default.html"> <img src="assets/img/latest/2.jpg" alt="..."></a>
                                                    </div>

                                                    <div class="content">
                                                        <a class="btn-link" href="post-default.html"><i class="fas fa-arrow-right"></i>next post</a>
                                                        <p class="entry-title"><a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a></p>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>/-->

                                <!--widget-comments-->
                                <div class="widget mb-50">
                                    <div class="widget-comments">
                                        <div class="title">
                                            <h5 id="commentTitle">3 Comments</h5>
                                        </div>
                                        <ul class="widget-comments-items" id="commentsContainer">
                                            <li class="comment-item">
                                                <img src="assets/img/user/1.jpg" alt="">
                                                <div class="content">
                                                    <ul class="info list-inline">
                                                        <li>Mohammed Ali</li>
                                                        <li class="dot"></li>
                                                        <li> January 15, 2021</li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                                        quod non fugiat aliquid sit similique!
                                                    </p>
                                                    <div><a href="#" class="btn-link"> <i class="arrow_back"></i> Reply</a></div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <img src="assets/img/author/1.jpg" alt="">
                                                <div class="content">
                                                    <ul class="info list-inline">
                                                        <li>Simon Albert</li>
                                                        <li class="dot"></li>
                                                        <li> January 15, 2021</li>
                                                    </ul>

                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                                        fugiat aliquid sit similique!
                                                    </p>
                                                    <div>
                                                        <a href="#" class="btn-link">
                                                            <i class="arrow_back"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment-item">
                                                <img src="assets/img/user/2.jpg" alt="">
                                                <div class="content">

                                                    <ul class="info list-inline">
                                                        <li>Adam bobly</li>
                                                        <li class="dot"></li>
                                                        <li> January 15, 2021</li>
                                                    </ul>

                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                                        quod non fugiat aliquid sit similique!
                                                    </p>

                                                    <div>
                                                        <a href="#" class="btn-link">
                                                            <i class="arrow_back"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!--Leave-comments-->
                                    <?php
                                    if (isset($_SESSION["user"])) {


                                    ?>
                                        <div class="widget-form">
                                            <div class="title">
                                                <h5>Leave a Reply</h5>
                                            </div>
                                            <form class="sign-form" action="#" method="POST" id="addCommentForm">

                                                <div class="alert alert-success contact_msg" id="commentSuccess" style="display: none" role="alert">
                                                    Your message was sent successfully.
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="commentAuth" value="<?php echo $_SESSION["user"]["id"] ?>">
                                                    <input type="hidden" id="commentParent" value="0">



                                                    <div class="col-12">
                                                        <button type="submit" id="addCommentBtn" name="submit" class="btn-custom">
                                                            Send Comment
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 max-width side-sidebar">
                            <div class="theiaStickySidebar">
                                <!--widget-latest-posts-->

                                <!--widget-author-->
                                <div class="widget">
                                    <div class="widget-author">
                                        <div class="author-img">
                                            <a href="author.php" class="image">
                                                <img src="assets/img/author/1.jpg" id="sideAuthorImg" alt="">
                                            </a>
                                        </div>
                                        <div class="author-content">
                                            <h6 class="name" id="sideAuthorName"> Hi, I'm Djoko Keita</h6>
                                            <p class="bio">
                                                I'm Djoko Keita, Web Developer and learner,
                                                i am interested in all things JavaScript, so this blog is for my exploration.
                                            </p>
                                            <div class="social-media">
                                                <ul class="list-inline">
                                                    <li>
                                                        <a href="#" class="color-facebook">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="color-instagram">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="color-twitter">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="color-youtube">
                                                            <i class="fab fa-youtube"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="color-pinterest">
                                                            <i class="fab fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/-->


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
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/raw"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.8.1/dist/bundle.min.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>
    <script>
        const queryString = window.location.search
        const urlParams = new URLSearchParams(queryString)
        const id = urlParams.get('id')
        const postMainImg = document.querySelector("#postMainImg")
        const postTitle = document.querySelector("#postTitle")
        const postDate = document.querySelector("#postDate")
        const postCategoryDisp = document.querySelector("#postCategoryDisp")
        const authorName = document.querySelector("#authorName")
        const authorImg = document.querySelector("#authorImg")
        const sideAuthorImg = document.querySelector("#sideAuthorImg")
        const sideAuthorName = document.querySelector("#sideAuthorName")
        const addCommentForm = document.querySelector("#addCommentForm")
        const addCommentBtn = document.querySelector("#addCommentBtn")
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

        $.post("php/posts/getOnePost.inc.php", {
            getOnePostSubmit: "action",
            id
        }, function(data) {
            if (isJson(data)) {
                const post = JSON.parse(data)[0]
                const postCat = categories.filter((category) => category.id == post.category)[0]
                postMainImg.src = post.img
                postTitle.textContent = post.name
                postCategoryDisp.textContent = postCat.name
                postDate.innerHTML = ` <span class="dot"></span> ${post.created_at.slice(0,15)}`


                //Get author
                $.post("php/users/getAuthor.inc.php", {
                    getAuthorSubmit: "action",
                    id: post.author
                }, function(data) {
                    if (isJson(data)) {
                        const author = JSON.parse(data)[0]

                        authorName.textContent = author.username
                        sideAuthorName.textContent = 'Hi, i am ' + author.username
                        if (!author.img) {
                            authorImg.src = "assets/img/user/profile.webp"
                            sideAuthorImg.src = "assets/img/user/profile.webp"
                        } else {
                            authorImg.src = author.img
                            sideAuthorImg.src = author.img
                        }
                    }
                })



                const editor = new EditorJS({
                    /** 
                     * Id of Element that should contain the Editor 
                     */
                    holder: 'postBody',
                    data: JSON.parse(post.body),
                    readOnly: true,


                    /** 
                     * Available Tools list. 
                     * Pass Tool's class or Settings object for each Tool you want to use 
                     */
                    tools: {
                        header: Header,
                        delimiter: Delimiter,
                        raw: RawTool,
                        quote: {
                            class: Quote,
                            inlineToolbar: true,
                            shortcut: 'CMD+SHIFT+O',
                            config: {
                                quotePlaceholder: 'Enter a quote',
                                captionPlaceholder: 'Quote\'s author',
                            },
                        },
                        list: {
                            class: List,
                            inlineToolbar: true,
                            config: {
                                defaultStyle: 'unordered'
                            }
                        },
                        checklist: {
                            class: Checklist,
                            inlineToolbar: true,
                        },
                        paragraph: {
                            class: Paragraph,
                            inlineToolbar: true,
                        },

                        embed: {
                            class: Embed,
                            inlineToolbar: true,
                            config: {
                                services: {
                                    youtube: true,
                                    twitter: true
                                }
                            }
                        },

                        image: {
                            class: ImageTool,
                            config: {
                                endpoints: {
                                    byFile: 'http://localhost:8080/bySolitdio/php/editorJS/uploadFile.inc.php', // Your backend file uploader endpoint
                                    byUrl: 'http://localhost:8080/bySolitdio/php/editorJS/fetchUrl.inc.php', // Your endpoint that provides uploading by Url
                                }
                            }
                        }
                    }
                })
            }

        })

        function addComment(e) {
            e.preventDefault();
            const now = new Date();
            isLoading(addCommentBtn)
            $.post("php/comments/addComment.inc.php", {
                addCommentSubmit: "action",
                parent: $("#commentParent").val(),
                author: $("#commentAuth").val(),
                body: $("#message").val(),
                created_at: now.toString(),
                post: id
            }, function(data) {
                if (data !== "Success") {
                    feedBack(data, "error")
                    loaded(addCommentBtn, "Send Comment")
                } else {
                    $("#commentSuccess").show();
                    addCommentForm.reset()
                    setTimeout(() => {
                        $("#commentSuccess").hide();
                    }, 3000)
                    loaded(addCommentBtn, "Send Comment")
                    getPostComments()
                }
            })
        }


        // Ecent Listeners
        addCommentForm.addEventListener("submit", addComment)


        //Function not triggered by DOM
        getPostComments()
        if (!sessionStorage.getItem("solitdioPosts")) {
            getPosts()
        } else {
            const posts = JSON.parse(sessionStorage.getItem("solitdioPosts"))
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




        }

        function getPostComments() {
            const commentsContainer = document.getElementById("commentsContainer")
            commentsContainer.innerHTML = ``

            $.post("php/comments/getPostComments.inc.php", {
                getPostCommentsSubmit: "action",
                post: id
            }, function(data) {
                if (data === "No posts!") {
                    document.getElementById("commentTitle").textContent = `0 Comments`
                } else if (isJson(data)) {
                    const comments = JSON.parse(data)
                    document.getElementById("commentTitle").textContent = `${comments.length} Comments`
                    comments.forEach(comment => {
                        //get author
                        $.post("php/users/getAuthor.inc.php", {
                            getAuthorSubmit: "action",
                            id: comment.author
                        }, function(data) {
                            if (!isJson(data)) {
                                feedBack(data, "error")
                            } else {
                                const author = JSON.parse(data)[0]
                                const profileImg = author.img ? author.img : "assets/img/user/profile.webp"
                                const li = document.createElement('li')
                                li.classList.add("comment-item")
                                li.innerHTML = ` <img src="${profileImg}" alt="">
                                                <div class="content">
                                                    <ul class="info list-inline">
                                                        <li>${author.username}</li>
                                                        <li class="dot"></li>
                                                        <li> ${comment.created_at.slice(0,15)}</li>
                                                    </ul>
                                                    <p>
                                                     ${comment.body}
                                                    </p>
                                                    <div><a href="#" class="btn-link" disabled> <i class="arrow_back"></i> Reply</a></div>
                                                </div>
                                            `
                                commentsContainer.appendChild(li)
                            }
                        })
                    });

                } else {
                    feedBack(data, "error")
                }
            })

        }

        function getPosts() {
            $.post("php/posts/getAllPosts.inc.php", {
                getAllPostsSubmit: "action"
            }, function(data) {
                if (isJson(data)) {
                    sessionStorage.setItem("solitdioPosts", data)
                    displayPosts(JSON.parse(data))
                } else {
                    feedBack(data, "error")
                }
            })

        }


        function feedBack(message, type) {
            if (type === 'error' || type === 'success') {
                Swal.fire('feedBack', message, type)
            } else {
                Swal.fire('feedBack', 'Type error in feddback!', 'error')
            }
        }

        function isLoading(el) {
            el.innerHTML = `<div class="spinner-border" role="status">
                                     <span class="visually-hidden">Loading...</span>
                                     </div>`
        }

        function loaded(el, txtCnt) {
            el.innerHTML = `${txtCnt}`
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

</html>