<?php
session_start();
if (isset($_POST["loginSubmit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if (empty($email) || empty($pwd)) {
        echo "Empty Field!";
    } else {
        include_once "../../classes/usersview.class.php";
        $user =  new Usersview();
        $user = $user->takeUserByEmail($email);
        if (count($user) === 0) {
            echo "No user found!";
        } elseif (count($user) === 1) {
            $user = $user[0];
            $verify = password_verify($pwd, $user["pwd"]);
            if (!$verify) {
                echo "Incorrect password!";
            } else {
                $_SESSION["user"] = $user;
                echo "Success";
            }
        } else {
            echo "Unexpected!More than one account found!";
        }
    }
} else {
    echo "Non-authorized";
}
