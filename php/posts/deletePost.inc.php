<?php
if (isset($_POST["deletePostSubmit"])) {
    $id = $_POST["id"];
    include_once "../../classes/postscontrol.class.php";

    $post = new Postscontrol();
    $post->removePost($id);
    echo "Success";
} else {
    echo "Non authorized";
}
