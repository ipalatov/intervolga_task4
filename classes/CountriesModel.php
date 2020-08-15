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
        if (empty($_POST['submit'])) return;

        $name = $_POST['name'];
        $abb_name = $_POST['abb_name'];
        $population = $_POST['population'];

        // echo '<pre>';
        // var_dump($name);
        // var_dump($abb_name);
        // var_dump($population);
        // echo '</pre>';

        //     // валидация
        //     $name = $this->validateName($name);

        // запрос на добавление автора
        $sql = "INSERT INTO `countries` SET `name` = :name,`abb_name` = :abb_name,`population` = :population";
        $stm = $this->dbconnect->prepare($sql);
        $stm->execute(compact('name', 'abb_name', 'population'));

        // проверяем ошибки
        $info = $stm->errorInfo();
        if ($info['0'] == "00000") {
            echo 'Запись успешно добавлена в базу данных!';
        } else {
            echo 'Ошибка: код ' . $info['1'] . ', сообщение: ' . $info['2'];
        }
    }
}
