<?php

    namespace App\Http;
    
    class Route{

        private static $routes = [
            
        ];

        public static function addRoute($path, $controller, $view){
            self::$routes[] = [
                'path' => $path,
                'controller' => $controller,
                'view' => $view
            ];
        }

        public static function getRoutes(){
            return self::$routes;
        }
    }
