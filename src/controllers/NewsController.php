<?php

namespace App\controllers;

use App\Core\Template;

class NewsController
{
    public function index() {

        $template = new Template();
        $template->setLayout('main');
        $template->render(compact([]),'news/index');
    }
}
