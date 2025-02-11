<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }
//use include here to use html file 
    public function notFound() {
        $template = $this->twig->load('app/public/assets/views/404.twig');
        echo $template->render([]);
    }

}
