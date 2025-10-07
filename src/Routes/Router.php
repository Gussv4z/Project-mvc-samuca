<?php

    namespace App\Routes;

    class Router{

        private static $routes =[];
        public static function addRoute( $path, $controller){
            self::$routes[] = [
                'path' => $path,
                'controller' => $controller
            ];
        }

        public static function getRoutes(){
            return self::$routes;
        }
    }

?>