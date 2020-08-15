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
        // $data[] = [
        //     'id' => 1,
        //     'name' => 'Russian Federation',
        //     'abb_name' => 'RUS',
        //     'population' => 146745098
        // ];
        // $data[] = [
        //     'id' => 2,
        //     'name' => 'United States of America',
        //     'abb_name' => 'USA',
        //     'population' => 329210630
        // ];
        // $data[] = [
        //     'id' => 3,
        //     'name' => 'Federal Republic of Germany',
        //     'abb_name' => 'GER',
        //     'population' => 83149300
        // ];
        // $data[] = [
        //     'id' => 4,
        //     'name' => 'United Kingdom',
        //     'abb_name' => 'UK',
        //     'population' => 60800000
        // ];

        $sql = "SELECT * FROM `countries`";

        $stm = $this->dbconnect->prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
