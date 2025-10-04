<?php

    namespace App\Models;

    use App\Models\DataBase;
    use PDOException;
    class User extends DataBase{

        public static function save($array){
            try{
                $pdo = self::getConnnection();

                $stmt = $pdo->prepare("");
            } catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
