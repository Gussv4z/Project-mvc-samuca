<?php

    namespace App\Controllers;

    abstract class Controller{

        public static function render($path, array $data){
            $requirePrefix =__DIR__. '/../Views/'.$path.'.php';
            $layoutMain = __DIR__ ."/../Views/layout.php";
            
            if(!file_exists($requirePrefix)){
                require $layoutMain;
            }
            
            extract($data);

            require $requirePrefix;
        
        }
    } 