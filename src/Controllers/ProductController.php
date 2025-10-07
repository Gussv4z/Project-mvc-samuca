<?php

    namespace App\Controllers;

    echo "em cadastro de produtos";


    class ProductController extends HomeController{
        public function show(){
            $this->loadView('Cadprod');
        }
    }
?>