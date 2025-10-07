<?php

    namespace App\Core;

    class Core{

        public static function dispatch($routes){
            

            $url = $_SERVER['REQUEST_URI'];
            
            $routeFound = false;

            $prefixController = "App\\Controllers\\";

            foreach($routes as $route){

                $pattern = '#^'.preg_replace('/{id}/' ,'([\w-]+)', $route['path']).'$#';

                if(preg_match($pattern, $url, $matches)){
                    array_shift($matches);
                    $routeFound = true;

                    [$controller, $action] = explode('@', $route['controller']);
                    
                    $newController = $prefixController . $controller;
                    $instanceController = new $newController;
                    $instanceController->$action();
                }
            }
            
            if(!$routeFound){
                    echo 'Path nao encontrado';
                    #redirecionar para o controller not found
                } 
        }
    }
?>