<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.php");
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
    <title> bySolitdio - Admin</title>

    <!--Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

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

            <section class="mt-60 mb-60">
                <div class="container">
                    <div class="sign widget w-100">
                        <div class="section-title">
                            <h5>Add Category</h5>
                        </div>
                        <form action="#" class="sign-form widget-form" id="addCategoryForm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Category Name*" id="category" value="" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-custom" id="categorySubmit">Add</button>
                            </div>

                        </form>
                        <table class="table table-dark table-striped-columns" id="categoryTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Remove</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section class="mt-60 mb-60">
                <div class="container">
                    <div class="sign widget w-100">
                        <div class="section-title">
                            <h5>Add Post</h5>
                        </div>
                        <form action="#" class="sign-form widget-form " id="postForm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Post Name*" id="name" value="" required>
                            </div>
                            <div class="form-group">
                                <div id="editorjs"> </div>
                            </div>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" id="postCategory">
                                    <option selected>Select a Category</option>

                                </select>
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="file" id="formFile">
                                <input type="hidden" id="author" value="<?php echo $_SESSION["user"]["id"]; ?>">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-custom" id="postSubmit">Add</button>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>
    <script>
        const categoryForm = document.querySelector("#addCategoryForm")
        const categoryName = document.querySelector("#category")
        const categoryBtn = document.querySelector("#categorySubmit")
        const postCategorySelect = document.querySelector("#postCategory")
        const postSubmit = document.querySelector("#postSubmit")
        const postForm = document.querySelector("#postForm")

        const editor = new EditorJS({
            /** 
             * Id of Element that should contain the Editor 
             */
            holder: 'editorjs',

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

        function saveData(e) {
            e.preventDefault()
            editor.save().then((outputData) => {
                console.log('Article data: ', outputData)
                const body = JSON.stringify(outputData)
                const intro = outputData.blocks[0].data.text
                const now = new Date()
                //Create a post
                const formData = new FormData(postForm);
                formData.append("addPostSubmit", "action")
                formData.append("body", body)
                formData.append("intro", intro)
                formData.append("name", $("#name").val())
                formData.append("created_at", now.toString())
                formData.append("category", $("#postCategory").val())
                formData.append("img", $("#formFile").prop('files')[0])
                formData.append("author", $("#author").val())
                console.log($("#author").val())

                postSubmit.innerHTML = `<div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`


                $.ajax({
                    type: 'POST',
                    url: 'php/posts/addPost.inc.php',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    error: function() {
                        showMessages("error", "An error occured");
                        $("#photoFormSubmit").html("submit");
                    },
                    success: function(data, status) {
                        if (data !== "Success") {
                            feedBack(data, "error")
                            postSubmit.innerHTML = `Add Post`
                        } else {
                            feedBack("Post added successfully", "success")
                            postSubmit.innerHTML = `Add Post`
                        }
                    }
                });
            }).catch((error) => {
                console.log('Saving failed: ', error)
            });
        }



        //Functions
        function addcategory(e) {
            e.preventDefault()
            categoryBtn.innerHTML = `<div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`
            $.post("php/category/addCategory.inc.php", {
                addCategorySubmit: "action",
                name: categoryName.value
            }, function(data) {
                if (data !== "Success") {
                    feedBack(data, "error");
                    categoryBtn.innerHTML = `Add`
                } else {
                    feedBack("Category Added with success!", "success")
                    categoryName.value = ''
                    categoryBtn.innerHTML = `Add`
                    getAllCategories()

                }
            })
        }

        //DataTable Initialisation
        let categoryTable = new $("#categoryTable").DataTable();

        //Event Listeners
        categoryForm.addEventListener("submit", addcategory)
        postForm.addEventListener("submit", saveData)




        getAllCategories()


        //UI Functions
        function getAllCategories() {

            $.post("php/category/getAllCategory.inc.php", {
                getAllCategorySubmit: "action"
            }, function(data) {
                if (!isJson(data)) {
                    feedBack(data, "error")
                } else {
                    categories = JSON.parse(data)

                    //Populate postCategory
                    categories.forEach(category => {
                        const option = document.createElement('option')
                        option.value = category.id
                        option.textContent = category.name
                        postCategorySelect.appendChild(option)
                    })

                    categoryTable.destroy()
                    categoryTable = $("#categoryTable").DataTable({
                        data: categories,
                        columns: [{
                                data: 'id'
                            },
                            {
                                data: 'name'
                            },
                            {
                                data: 'id',
                                render: function(data, type, row) {
                                    return `<button class="btn btn-danger removeBtn" data-id="${data}"> <i class="fas fa-times"></i> </button>`
                                }
                            }
                        ]
                    });


                    //Delete Category
                    $(".removeBtn").click(function(e) {
                        e.preventDefault()
                        e.stopPropagation()
                        const that = $(this)
                        const id = that.data("id");
                        that.html(`<div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`)
                        $.post("php/category/deleteCategory.inc.php", {
                            deleteCategorySubmit: "action",
                            id
                        }, function(data) {
                            if (data !== "Success") {
                                feedBack(data, "error")
                                that.html(`<i class="fas fa-times"></i>`)
                            } else {
                                feedBack("Category removed!", "success")
                                that.html(`<i class="fas fa-times"></i>`)
                                getAllCategories()
                            }
                        })
                    })

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