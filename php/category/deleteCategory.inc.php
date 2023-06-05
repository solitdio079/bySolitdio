<?php
if (isset($_POST["deleteCategorySubmit"])) {
    $id = $_POST["id"];
    include_once "../../classes/categorycontrol.class.php";
    $category = new Categorycontrol();
    $category->removeCategory($id);
    echo "Success";
} else {
    echo "Non-authorized";
}
