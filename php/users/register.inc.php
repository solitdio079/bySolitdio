<?php
if (isset($_POST["registerSubmit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if (empty($username) || empty($email) || empty($pwd)) {
        echo "Empty input field!";
    } else {
        include_once "../../classes/userscontrol.class.php";
        include_once "../../classes/usersview.class.php";

        $verify = new Usersview();
        $verify = $verify->takeUserByEmail($email);
        if (count($verify) !== 0) {
            echo "User already exist";
        } else {
            $newPwd =  password_hash($pwd, PASSWORD_DEFAULT);
            $user = new Userscontrol();
            $user->createUser($username, $newPwd, $email);
            echo "Success";
        }
    }
} else {
    echo "Non-authorized entry!";
}
