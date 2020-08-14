<?php

namespace classes;

class MainController
{
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {
        $this->view->render('mainView.php', 'layoutView.php');
    }
}
