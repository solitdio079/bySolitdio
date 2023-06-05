<?php
include_once "dbh.class.php";

class Posts extends Dbh
{
    protected function setPost($category, $name, $intro, $body, $created_at, $author, $img)
    {
        $sql = "INSERT INTO `posts`(`category`, `name`, `intro`, `body`, `created_at`, `author`, `img`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$category, $name, $intro, $body, $created_at, $author, $img]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function getAllPosts()
    {
        $sql = "SELECT * FROM `posts` WHERE 1 ORDER `id` BY DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getPostById($id)
    {
        $sql = "SELECT * FROM `posts` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getPostByCategory($category)
    {
        $sql = "SELECT * FROM `posts` WHERE `category` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$category]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getPostByAuthor($author)
    {
        $sql = "SELECT * FROM `posts` WHERE `author` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$author]) or die(print_r($stmt->errorInfo(), true));

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function updatePost($category, $name, $intro, $body, $created_at, $author, $img, $id)
    {
        $sql = "UPDATE `posts` SET `category`=?,`name`=?,`intro`=?,`body`=?,`created_at`=?,`author`=?,`img`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$category, $name, $intro, $body, $created_at, $author, $img, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function deletePost($id)
    {
        $sql = "DELETE FROM `posts` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }
}
