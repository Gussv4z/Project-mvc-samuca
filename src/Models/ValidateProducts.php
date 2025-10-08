<?php

namespace App\Models;

use App\Models\Database;

class ValidateProducts extends Database{

       

    public static function validateProduct(array $product){

        $errors = [];
        foreach($product as $camps){
            if(empty($camps)){
                $errors[] = [
                    "message" => "Campo invalido"
                ];
                return $errors;
            }
                
        }
    }
}

?>
