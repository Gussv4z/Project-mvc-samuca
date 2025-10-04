<?php

    use App\Http\Route;

    Route::addRoute('/cadastro/cliente', 'UserController@print');
    Route::addRoute('/cadastro/product', 'userController@print');
    Route::addRoute('/cadastro/venda', 'userController@print');

?>