<?php


    namespace App\Controllers;

    use App\Models\ValidateVenda;

    class VendaController extends BaseController{


        public function register(){

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $response = ValidateVenda::validateVenda($_POST);
                if($response){
                    header("Location: /home");
                }
                $this->loadView('Cadvenda');
            }
            else{
                $this->loadView('Cadvenda');
            }
        }
    }

?>