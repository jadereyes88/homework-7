<?php

namespace app\models;

class Post
{
      private $posts = [
        ['id' => 1, 'title' => 'Post One', 'content' => 'Content for post one.'],
        ['id' => 2, 'title' => 'Post Two', 'content' => 'Content for post two.'],
        ['id' => 3, 'title' => 'Post Three', 'content' => 'Content for post three.'],
    ];

    public function getAll()
    {
        return $this->posts;
    }
}
