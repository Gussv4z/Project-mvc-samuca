<?php

    namespace App\Core;

    class Core{

        public static function dispatch(array $routes){

            $uri = $_SERVER['REQUEST_URI'];

            $routeFound = false;

            $prefixController = 'use App\\Controllers\\';

            foreach($routes as $route){

                $pattern = "#^".preg_replace('/{id}/', '([\w-]+)',$route['path'])."$#";
                
                if(preg_match($pattern, $uri, $matches)){
                    

                    $routeFound = True;

                    [$controller, $action] = explode('@',$route['controller']);
                    echo $controller;
                    
                    $controllerDir = $prefixController . $controller;
                    $controllerSpace = new $controller;
                    print_r($controllerSpace);



                    #redirecionar para um controller e uma view de acordo com a rota atual
                }

                if(!$routeFound){
                    echo "Not found";
                }
            }
        }
    }