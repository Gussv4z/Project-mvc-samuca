<?php

    namespace App\Models;
    class ValidateVenda{


        public static function validateVenda($posts){
            $countErrors = [];
                foreach($_POST as $post=>$value){
                    if(empty($value)){
                        $countErrors[] = "Campo vazio";
                    }
                    
                }
                if(empty($countErrors)){
                    return true;
                } else{
                    return false;
                }
        }
    }

?>