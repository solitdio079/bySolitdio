<?php
include_once "comments.class.php";

class Commentscontrol extends Comments
{
    public function createComment($body, $author, $created_at, $parent, $post)
    {
        $this->setComment($body, $author, $created_at, $parent, $post);
    }

    public function changeComment($body, $created_at, $id)
    {
        $this->updateComment($body, $created_at, $id);
    }
    public function removeComment($id)
    {
        $this->deleteComment($id);
    }
}
