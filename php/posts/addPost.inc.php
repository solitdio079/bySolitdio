<?php
if (isset($_POST["addPostSubmit"])) {
    $image = $_FILES["img"];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $created_at = $_POST["created_at"];
    $body = $_POST["body"];
    $intro = $_POST["intro"];
    $author = $_POST["author"];

    if (empty($name) || empty($category) || empty($body) || empty($intro)) {
        echo "Empty Field!";
    } else if (!isset($image)) {
        echo "No image provided";
    } else {
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
                    include_once "../../classes/postscontrol.class.php";
                    $post = new Postscontrol();
                    $post->createPost($category, $name, $intro, $body, $created_at, $author, $uploadForDb);
                    echo "Success";
                } else {
                    echo "Failed To Upload to Folder!";
                }
            }
        }
    }
} else {
    echo "Non-authorized";
}
