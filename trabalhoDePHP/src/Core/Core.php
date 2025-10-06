<?php

    namespace App\Core;
    use App\Controllers\UserController;
    class Core{

        public static function dispatch(array $routes){

            $uri = $_SERVER['REQUEST_URI'];


            $routeFound = false;

            $prefixController = 'App\\Controllers\\';

            foreach($routes as $route){

                $pattern = "#^".preg_replace('/{id}/', '([\w-]+)',$route['path'])."$#";
                
                if(preg_match($pattern, $uri, $matches)){
                    
                    
                    $routeFound = True;

                    [$controller, $action] = explode('@',$route['controller']);
                    $controllerDir = $prefixController . $controller;
                    $controllerSpace = new $controllerDir();
                    $controllerSpace->$action();
                    $prefDir = $route['view'];
                    $pathView = __DIR__ . '/../views/'.$prefDir.'.php';
                    require $pathView;
                    #redirecionar para um controller e uma view de acordo com a rota atual
                }

                
            }
            if(!$routeFound){
                echo "Not Found";
            }
        }
    }