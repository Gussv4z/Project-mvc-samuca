<?php

    namespace App\Routes;

    use App\Routes\Router;

    Router::addRoute('/', "HomeController@index");
    Router::addRoute('/cadastro/cliente', "UserController@register");
    Router::addRoute('/home', "HomeController@index");
    Router::addRoute('/cadastro/produto', "ProductController@show");
    Router::addRoute('/cadastro/venda', "VendaController@show");

?>