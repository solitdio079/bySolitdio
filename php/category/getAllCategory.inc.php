<?php
if (isset($_POST["getAllCategorySubmit"])) {
    include_once "../../classes/categoryview.class.php";

    $categories = new Categoryview();
    $categories = $categories->takeAllCategories();
    if (count($categories) === 0) {
        echo "No categories yet";
    } else {
        echo json_encode($categories);
    }
} else {
    echo "Non-authorized";
}
