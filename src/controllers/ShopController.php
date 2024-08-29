<?php

namespace App\controllers;

use App\Core\Template;

class ShopController
{
    public function index() {

        $template = new Template();
        $template->setLayout('shop');
        $template->render(compact([]),'shop/index');
    }
}
