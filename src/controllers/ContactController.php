<?php

namespace App\controllers;

use App\Core\Template;
use App\Models\Chat;

class ContactController
{
    public function index() {

        $template = new Template();
        $template->setLayout('main');
        $template->render(compact([]),'contact/index');
    }
    public function about() {

        $template = new Template();
        $template->setLayout('main');
        $template->render(compact([]),'contact/about');
    }
}
