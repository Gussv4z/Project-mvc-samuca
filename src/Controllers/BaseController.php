<?php

    namespace App\Controllers;
    
    use App\Core\Render;

    class BaseController{

        private $view;

        public function __construct(){
            $this->view = new Render();
        }

        public function loadView($template, $data =[]){
            $this->view->render($template, $data);
        }
    }

?>