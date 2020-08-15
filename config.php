<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'intervolga_task4');
define('DB_USER', 'ivan');
define('DB_PASSWORD', '2222');

// указать APP_ROOT относительно корня - если корневая директория находится не в корне хоста
define('APP_ROOT', '/php-test/intervolga/task4/');
define('APP_MAIN', APP_ROOT . 'main/index');
