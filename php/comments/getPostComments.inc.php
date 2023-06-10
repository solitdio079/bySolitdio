<?php
if (isset($_POST["getPostCommentsSubmit"])) {
    $postId = $_POST["post"];
    include_once "../../classes/commentsview.class.php";
    $comment = new CommentsView();
    $comment = $comment->takeCommentsByPost($postId);
    if (count($comment) === 0) {
        echo "No comments!";
    } else {
        echo json_encode($comment);
    }
} else {
    echo "Non authorized";
}
