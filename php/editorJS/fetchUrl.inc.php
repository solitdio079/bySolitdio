<?php
//blog.theonlytutorials.com
//author: agurchand
if ($_POST['url']) {
    //get the url
    $url = $_POST['url'];
    //add time to the current filename
    $name = basename($url);
    list($txt, $ext) = explode(".", $name);
    $name = uniqid();
    $name = $name . "." . $ext;
    //check if the files are only image / document
    if ($ext == "jpg" or $ext == "png" or $ext == "gif" or $ext == "doc" or $ext == "docx" or $ext == "pdf") {
        //here is the actual code to get the file from the url and save it to the uploads folder
        //get the file from the url using file_get_contents and put it into the folder using file_put_contents
        $upload = file_put_contents("http://localhost:8080/bySolitdio/assets/img/blog/" . $name, file_get_contents($url));
        $returnJSOn = [
            "success" => 1,
            "file" => [
                "url" => "http://localhost:8080/bySolitdio/assets/img/blog/" . $name,
                // ... and any additional fields you want to store, such as width, height, color, extension, etc
            ]
        ];
        //check success
        if ($upload)  echo json_encode($returnJSOn);
        else "please check your folder permission";
    } else {
        echo "Please upload only image/document files";
    }
}
