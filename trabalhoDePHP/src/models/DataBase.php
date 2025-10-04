<?php

    namespace App\Models;

    use PDO;

    class DataBase{

        public static function getConnnection(){
            
            $pdo = new PDO("mysql:host=localhost;dbname=kabaumDB", "root", "");
            
            return $pdo;
        }
    }
?>