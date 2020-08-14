<?php

namespace classes;

class  Route
{
    static function start()
    {
        $controllerName = 'main';
        $actionName = 'index';

        // если URL в корне хоста, то делаем маршрут на главную страницу APP_MAIN
        if (APP_ROOT == $_SERVER['REQUEST_URI']) {
            $route = APP_MAIN;
        } else {
            $route = $_SERVER['REQUEST_URI'];
        }

        // Разбиваем маршрут на части в массив
        $routeParts = explode('/', $route);

        $c = count($routeParts) - 2; // второй элемент с конца массива - для имени контроллера
        $a = count($routeParts) - 1; // первый элемент с конца массива - для имени действия

        //Получаем имя контроллера
        if (!empty($routeParts[$c])) {
            $controllerName = $routeParts[$c];
        }
        //Получаем имя действия (до знака "?")
        if (!empty($routeParts[$a])) {
            $actionName = strstr($routeParts[$a], '?', TRUE) ? strstr($routeParts[$a], '?', TRUE) : $routeParts[$a];
        }

        $controllerName = 'classes\\' . $controllerName . 'Controller';
        $actionName = 'action' . ucfirst($actionName);


        // исключение на случай отсуствия класса
        if (!class_exists($controllerName)) {
            throw new \ErrorException('Controller does not exist');
        }

        $objController = new $controllerName();

        // исключение на случай отсуствия метода класса
        if (!method_exists($objController, $actionName)) {
            throw new \ErrorException('Action does not exist');
        }

        $objController->$actionName();
    }
}
