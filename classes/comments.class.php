<?php
include_once "dbh.class.php";


class Comments extends Dbh
{
    protected function setComment($body, $author, $created_at, $parent, $post)
    {
        $sql = "INSERT INTO `comments`(`body`, `author`, `created_at`, `parent`, `post`) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$body, $author, $created_at, $parent, $post]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function getCommentsByPost($post)
    {
        $sql = "SELECT * FROM `comments` WHERE 1 ORDER `id` BY DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$post]) or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getCommentsByAuthor($author)
    {
        $sql = "SELECT * FROM `comments` WHERE `autor`=? ORDER `id` BY DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$author]) or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getCommentsByParent($parent)
    {
        $sql = "SELECT * FROM `comments` WHERE `parent`=? ORDER `id` BY DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$parent]) or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function updateComment($body, $created_at, $id)
    {
        $sql = "UPDATE `comments` SET `body`=?,`created_at`=? WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$body, $created_at, $id]) or die(print_r($stmt->errorInfo(), true));
    }
    protected function deleteComment($id)
    {
        $sql = "DELETE FROM `comments` WHERE `id` =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(), true));
    }
}
