<?php

    namespace App\Models;

    use App\Models\Database;


    class Products extends Database{

        public static function insertDB($data){
                self::getConnection();
        }

    }

?>