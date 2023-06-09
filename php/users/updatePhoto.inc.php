<?php
if (isset($_POST["userPhotoSubmit"])) {
    $id = $_POST["id"];
    $image = $_FILES["img"];
    if (!$image) {
        echo "No image given!";
    } else {
        if ($image['error'] !== 0) {
            echo "Error occured: " . $image['error'];
            exit();
        } elseif ($image['size'] > 5000000) {
            echo "Image too heavy!";
            exit();
        } else {
            $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG', 'webp'];
            $file_extension = explode('.', $image['name']);
            $file_extension = end($file_extension);
            if (!in_array($file_extension, $extensions)) {
                echo "Error occured: " . $image['tmp_name'] . "is not supported type";
                exit();
            } else {
                $imageTemp = $image['tmp_name'];
                $imageNewName = uniqid("", true) . "." . $file_extension;
                $uploadFolder = "../../assets/img/user/";
                $uploadForDb = "assets/img/user/";
                $destination = $uploadFolder . $imageNewName;
                if (move_uploaded_file($imageTemp, $destination)) {
                    $location = $uploadForDb . $imageNewName;
                    include_once "../../classes/userscontrol.class.php";

                    $user = new Userscontrol();
                    $user->changeImg($location, $id);
                    echo "Success";
                } else {
                    echo "Failed To Upload to Folder!";
                    exit();
                }
            }
        }
    }
} else {
    echo "Non authorized";
}
