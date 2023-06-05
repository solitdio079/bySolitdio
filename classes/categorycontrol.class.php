<?php
include_once "category.class.php";


class Categorycontrol extends Category
{
    public function createCategory($name)
    {
        $this->setCategory($name);
    }
    public function removeCategory($id)
    {
        $this->deleteCategory($id);
    }
    public function changeCategory($name, $id)
    {
        $this->updateCategory($name, $id);
    }
}
