<?php

namespace classes;

class CountriesController
{
    public $view;
    public $countriesModel;

    public function __construct()
    {
        $this->view = new View();
        $this->countriesModel = new CountriesModel();
    }

    public function actionIndex()
    {
        $countries = $this->countriesModel->getIndex();
        $this->view->render('countryIndexView.php', 'layoutView.php', $countries);
    }

    public function actionCreate()
    {
        var_dump('метод' . __METHOD__);
    }
}