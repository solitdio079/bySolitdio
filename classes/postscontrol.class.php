<?php
include_once "posts.class.php";


class Postscontrol extends Posts
{
    public function createPost($category, $name, $intro, $body, $created_at, $author, $img)
    {
        $this->setPost($category, $name, $intro, $body, $created_at, $author, $img);
    }

    public function changePost($category, $name, $intro, $body, $created_at, $author, $img, $id)
    {
        $this->updatePost($category, $name, $intro, $body, $created_at, $author, $img, $id);
    }
    public function removePost($id)
    {
        $this->deletePost($id);
    }
}
