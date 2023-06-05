<?php
include_once "dbh.class.php";


class Category extends Dbh
{
    protected function setCategory($name)
    {
        $sql = "INSERT INTO `category`(`name`) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function getAllCategories()
    {
        $sql = "SELECT * FROM `category` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }

    protected function getCategoryById($id)
    {
        $sql = "SELECT * FROM `category` WHERE `id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }

    protected function updateCategory($name, $id)
    {
        $sql = "UPDATE `category` SET `name`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $id]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function deleteCategory($id)
    {
        $sql = "DELETE FROM `category` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }
}
