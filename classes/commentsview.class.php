<?php
include_once "comments.class.php";


class Commentsview extends Comments
{
    public function takeCommentsByPost($post)
    {
        $result = $this->getCommentsByPost($post);
        return $result;
    }
    public function takeCommentsByAuthor($author)
    {
        $result = $this->getCommentsByAuthor($author);
        return $result;
    }
    public function takeCommentsByParent($parent)
    {
        $result = $this->getCommentsByParent($parent);
        return $result;
    }
}
