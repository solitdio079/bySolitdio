<?php
if (isset($_POST["addCommentSubmit"])) {
    include_once "../../classes/commentscontrol.class.php";
    $body = $_POST["body"];
    $parent = $_POST["parent"];
    $author = $_POST["author"];
    $created_at = $_POST["created_at"];
    $post = $_POST["post"];
    if (empty($body)) {
        echo "Empty field";
    } else {
        $comment = new Commentscontrol();
        $comment->createComment($body, $author, $created_at, $parent, $post);
        echo "Success";
    }
} else {
    echo "Non authorized";
}
