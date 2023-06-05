<?php
if (isset($_POST["updateCategorySubmit"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    if (empty($name) || empty($id)) {
        echo "Empty Field";
    } else {
        include_once "../../classes/categorycontrol.class.php";
        $category = new Categorycontrol();
        $category->changeCategory($name, $id);
        echo "Success";
    }
} else {
    echo "Non-authorized";
}
