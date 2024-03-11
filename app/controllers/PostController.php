<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{

    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAll(); // Assume getAll() fetches all posts.

        $template = $this->twig->load('posts/index.twig'); // Load the Twig template.
        echo $template->render(['posts' => $posts]); // Pass the posts to the template.
    }

}
