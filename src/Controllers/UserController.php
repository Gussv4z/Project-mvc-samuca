<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Validate;

class UserController extends BaseController
{

    public function register()
    {



        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $response = Validate::validate($_POST);
            
            if ($response === true) {
                $this->loadView('Cadcli', [
                    'message' => 'Usuario cadastrado no sistema com sucesso'
                ]);

                header("Location: /home");
            } else {
                $this->loadView("Cadcli", [
                    'errors' => Validate::getErrors()
                ]);
            }
        } else {
            $this->loadView('Cadcli');
        }

    }
}

?>