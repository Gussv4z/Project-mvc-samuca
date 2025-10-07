<?php

    namespace App\Models;

    use App\Models\DataBase;

    class Validate extends DataBase{
        private static $errors = [];
        private static $infos = [];
        public static function validate(array $data){
            if(empty($data['cpf'])){
                self::$errors['cpf'] = ['message' => "Campo cpf invalido"];
            }
            if(empty($data['nome'])){
                self::$errors['nome'] = ['message'=> "Campo nome invalido"]; 
            }
           
            if(empty($data['tell'])){
                self::$errors['tell'] = ['message'=> "Campo tell invalido"]; 
            }
            if(empty($data['mail'])){
                self::$errors['email'] = ['message'=> "Campo email invalido"]; 
            }
            if(empty($data['address'])){
                self::$errors['addres'] = ['message'=> "Campo endereco invalido"]; 
            }
            if(empty($data['street'])){
                self::$errors['street'] = ['message'=> "Campo bairro invalido"]; 
            }
            if(empty($data['city'])){
                self::$errors['city'] = ['message'=> "Campo cidade invalido"]; 
            }
            if(empty($data['state'])){
                self::$errors['state'] = ['message'=> "Campo state invalido"]; 
            }
            if(empty($data['cep'])){
                self::$errors['cep'] = ['message'=> "Campo cep invalido"]; 
            } 
            
            return empty(self::getErrors());
            
        }

        public static function getErrors(){
            return self::$errors;
        }
        
        public static function getInfos(){
            return self::$infos;
        }

        


        public static function validateCEP($cep){

            $cep = preg_replace('/\D/', '', $cep);

            if(strlen($cep) !== 8){
                return null;
            }

            $url = "https://viacep.com.br/ws/{$cep}/json/";

            $options = ['http' => ['timeout' => 5]];
            $context= stream_context_create($options);
            $response = file_get_contents($url, false, $context);

            if(!$response){
                return null;
            }

            $data = json_encode($response, true);

            if(isset($data['erro'])){
                return null;
            }

            return json_decode($data, true);

        }
    }

?>