<?php

namespace classes;

use PDO;
use PDOException;

class CountriesModel
{
    public $dbConnect;

    public function __construct()
    {
        $this->dbconnect = static::DBConnect();
    }

    static function DBConnect()
    {
        try {
            $dbconnect = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=UTF8', DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
            die($e->getMessage());
        }
        return $dbconnect;
    }

    public function getIndex()
    {
        $sql = "SELECT * FROM `countries`";
        $stm = $this->dbconnect->prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function addCountry()
    {
        // очищаем сессию по нажатию кнопки "очистить"
        if (isset($_POST['clear'])) {
            unset($_SESSION['name']);
            unset($_SESSION['abb_name']);
            unset($_SESSION['population']);
        };

        if (empty($_POST['submit'])) return;

        // записываем в переменные и в сессию данные POST запроса
        $name = $_SESSION['name'] = $_POST['name'];
        $abb_name = $_SESSION['abb_name'] = strtoupper($_POST['abb_name']);
        $population = $_SESSION['population'] = $_POST['population'];

        // SQL запрос на добавление автора
        $sql = "INSERT INTO `countries` SET `name` = :name,`abb_name` = :abb_name,`population` = :population";
        $stm = $this->dbconnect->prepare($sql);
        $stm->execute(compact('name', 'abb_name', 'population'));

        // проверяем ошибки
        $info = $stm->errorInfo();
        if ($info['0'] == "00000") {
            $_SESSION['message'] = 'Запись успешно добавлена в базу данных!';
            unset($_SESSION['name']);
            unset($_SESSION['abb_name']);
            unset($_SESSION['population']);
            header('Location: ' . APP_ROOT . '/countries/create', true, 303);
            die;
        } else {
            $_SESSION['error'] = 'Ошибка: код ' . $info['1'] . ', сообщение: ' . $info['2'];
        }
    }
}
