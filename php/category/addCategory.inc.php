<?php
if (isset($_POST["addCategorySubmit"])) {
    $name = $_POST["name"];
    if (empty($name)) {
        echo "Empty Field";
    } else {
        include_once "../../classes/categorycontrol.class.php";
        $category = new Categorycontrol();
        $category->createCategory($name);
        echo "Success";
    }
} else {
    echo "Non-authorized";
}
