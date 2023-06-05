<?php
if (isset($_FILES["image"])) {
    $image = $_FILES["image"];
    $uploadFolder = "../../assets/img/blog/";
    if ($image['error'] !== 0) {
        echo "error in image";
    } else {
        $extensions = ['jpg', 'jpeg', 'png', 'gif', 'heic', 'pdf'];
        $file_extension = explode('.', $image['name']);
        $file_extension = end($file_extension);
        if (!in_array($file_extension, $extensions)) {
            echo "Type not supported!";
        } else {
            $imageTemp = $image['tmp_name'];
            $imageNewName = uniqid() . "." . $file_extension;
            $destination = $uploadFolder . $imageNewName;
            if (move_uploaded_file($imageTemp, $destination)) {
                $returnJSOn = [
                    "success" => 1,
                    "file" => [
                        "url" => "http://localhost:8080/bySolitdio/assets/img/blog/" . $imageNewName,
                        // ... and any additional fields you want to store, such as width, height, color, extension, etc
                    ]
                ];
                echo json_encode($returnJSOn);
            } else {
                echo "Not moved!";
            }
        }
    }
}
