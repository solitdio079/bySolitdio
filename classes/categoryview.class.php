<?php
include_once "category.class.php";

class Categoryview extends Category
{
    public function takeAllCategories()
    {
        $result = $this->getAllCategories();
        return $result;
    }

    public function takeCategoryById($id)
    {
        $result = $this->getCategoryById($id);
        return $result;
    }
}
