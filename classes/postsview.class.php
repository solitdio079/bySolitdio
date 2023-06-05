<?php
include_once "posts.class.php";

class Postsview extends Posts
{
    public function takeAllPosts()
    {
        $result = $this->getAllPosts();
        return $result;
    }

    public function takePostById($id)
    {
        $result = $this->getPostById($id);
        return $result;
    }
    public function takePostByCategory($category)
    {
        $result = $this->getPostByCategory($category);
        return $result;
    }
    public function takePostByAuthor($author)
    {
        $result = $this->getPostByAuthor($author);
        return $result;
    }
}
