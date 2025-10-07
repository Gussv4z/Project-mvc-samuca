<?php

    namespace App\Models;
    use PDO;
    use PDOException;
    class Database{


        public static function getConnection(){

            $host = 'localhost';
            $db = 'teste';
            $user = 'root';
            $pass = '';
            $charset = 'utfmb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


            
           try {
                $pdo = new PDO($dsn,$user,$pass);
            }catch(PDOException $e){
                echo $e->getMessage();
            };
        }
    }

?>