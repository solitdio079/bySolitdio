<?php
if (isset($_POST["getOnePostSubmit"])) {
    $id = $_POST["id"];
    include_once "../../classes/postsview.class.php";
    $post = new Postsview();
    $post = $post->takePostById($id);
    if (count($post) === 0) {
        echo "No Post found";
    } else {
        echo json_encode($post);
    }
} else {
    echo "Non-authorized";
}
