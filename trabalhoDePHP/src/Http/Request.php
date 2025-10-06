<?php

    namespace App\Http;

    class Request{

        public static function getMethod(){
            return $_SERVER['REQUEST_METHOD'];
        }

        public static function post(){
            $json = json_decode(file_get_contents('php://inputs'), true);

            $data = match(self::getMethod()){
                'GET' => $_GET,
                'POST', 'PUT', 'DELETE' =>$json
            };
            return $data;
        }
    }
?>