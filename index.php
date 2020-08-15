<?php

use classes\Route;

require_once realpath('config.php');
require_once realpath('vendor/autoload.php');

// класс для обработки маршрута в строке браузера
Route::start();
