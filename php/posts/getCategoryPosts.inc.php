<?php
if (isset($_POST["getCategoryPostsSubmit"])) {
    $category = $_POST["category"];
    include_once "../../classes/postsview.class.php";
    $posts = new Postsview();
    $posts = $posts->takePostByCategory($category);
    if (count($posts) === 0) {
        echo "No posts yet";
    } else {
        echo json_encode($posts);
    }
} else {
    echo "Non authorized";
}
