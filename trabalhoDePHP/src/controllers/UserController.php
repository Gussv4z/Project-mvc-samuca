<?php

    namespace App\Controllers;

    use App\Http\Request;
    use App\Controllers\Controller;

    class UserController extends Controller{

        public function registerCliente(){
            print_r(Request::post());
        }
    }

?>