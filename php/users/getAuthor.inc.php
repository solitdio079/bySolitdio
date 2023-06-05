<?php
if (isset($_POST["getAuthorSubmit"])) {
    $id = $_POST["id"];
    include_once "../../classes/usersview.class.php";
    $user = new Usersview();
    $user = $user->takeUserById($id);
    if (count($user) !== 1) {
        echo "No user found!";
    } else {
        echo json_encode($user);
    }
} else {
    echo "Non authorized";
}
