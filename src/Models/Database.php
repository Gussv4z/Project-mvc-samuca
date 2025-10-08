<?php

    namespace App\Models;
    use PDO;
    use PDOException;
    class Database{
        public $pdo;
        public function __construct(){
            $this->pdo;
        }


        public static function getConnection(){

            $host = '127.0.0.1';
            $db = 'loja';
            $port = 3306;
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=127.0.0.1;port=3306;dbname=loja;charset=utf8mb4";
            
           try {
                $pdo = new PDO($dsn,$user,$pass);
                return $pdo;
                
            }catch(PDOException $e){
                echo $e->getMessage();
            };
        }
    }

?>