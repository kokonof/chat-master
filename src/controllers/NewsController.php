<?php

namespace App\controllers;

use App\Core\Template;

class NewsController
{
    public function index() {

        $template = new Template();
        $template->setLayout('news');
        $template->render(compact([]),'news/index');
    }
}
