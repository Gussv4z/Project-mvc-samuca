<?php

    use App\Http\Route;

    Route::addRoute('/cadastro/cliente', 'UserController@registerCliente', 'cadCli');
    Route::addRoute('/cadastro/product', 'UserController@print', "undef");
    Route::addRoute('/cadastro/venda', 'UserController@print', "undef");
    Route::addRoute('/home', 'UserController@registerCliente', "undef");
