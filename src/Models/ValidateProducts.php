<?php

namespace App\Models;

class ValidateProducts{

       

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