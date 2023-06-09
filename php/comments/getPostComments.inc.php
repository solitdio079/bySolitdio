<?php
if (isset($_POST["getPostCommentsSubmit"])) {
    $postId = $_POST["post"];
    include_once "../../classes/commentsview.class.php";
    $posts = new CommentsView();
    $posts = $posts->takeCommentsByPost($postId);
    if (count($posts) === 0) {
        echo "No posts!";
    } else {
        echo json_encode($posts);
    }
} else {
    echo "Non authorized";
}
