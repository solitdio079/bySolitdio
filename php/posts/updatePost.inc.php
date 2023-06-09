<?php
if (isset($_POST["updatePostSubmit"])) {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $created_at = $_POST["created_at"];
    $body = $_POST["body"];
    $intro = $_POST["intro"];
    $author = $_POST["author"];
    $id = $_POST["id"];

    include_once "../../classes/postsview.class.php";

    $postImg = new Postsview();
    $postImg = $postImg->takePostById($id);
    $postImg = $postImg[0]["img"];
    if (!$postImg) {
        echo "Wrong post id";
    } else {

        if (empty($name) || empty($category) || empty($body) || empty($intro)) {
            echo "Empty Field!";
        } else if (!isset($_FILES["img"])) {
            include_once "../../classes/postscontrol.class.php";
            $post = new Postscontrol();
            $post->changePost($category, $name, $intro, $body, $created_at, $author, $postImg, $id);
            echo "Success";
        } else {
            $image = $_FILES["img"];
            if ($image['error'] !== 0) {
                echo "Error occured: " . $image['error'];
            } elseif ($image['size'] > 5000000) {
                echo "Image too heavy!";
            } else {
                $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG', 'webp'];
                $file_extension = explode('.', $image['name']);
                $file_extension = end($file_extension);
                if (!in_array($file_extension, $extensions)) {
                    echo "Error occured: " . $image['tmp_name'] . "is not supported type";
                } else {
                    $imageTemp = $image['tmp_name'];
                    $imageNewName = uniqid("", true) . "." . $file_extension;
                    $uploadFolder = "../../assets/img/blog/";
                    $uploadForDb = "assets/img/blog/" . $imageNewName;
                    $destination = $uploadFolder . $imageNewName;
                    if (move_uploaded_file($imageTemp, $destination)) {
                        unlink("../../" . $postImg);
                        include_once "../../classes/postscontrol.class.php";
                        $post = new Postscontrol();
                        $post->changePost($category, $name, $intro, $body, $created_at, $author, $uploadForDb, $id);
                        echo "Success";
                    } else {
                        echo "Failed To Upload to Folder!";
                    }
                }
            }
        }
    }
} else {
    echo "Non-authorized";
}
