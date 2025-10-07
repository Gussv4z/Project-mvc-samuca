<?php

    namespace App\Controllers;
    
    use App\Models\ValidateProducts;

    class ProductController extends HomeController{
        public function show(){
            print_r($_POST);

            $this->loadView('Cadprod');

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $productName = $_POST['nameProduct'];
                $productId = $_POST['id-product'];
                $productDesc = $_POST['description'];
                $productMarc = $_POST['marc'];
                $productValue = $_POST['value'];
                $productQtd = $_POST['qtd'];
                $productSize = $_POST['size'];

                $data = [
                    'prodName' =>$productName,
                    'prodId' =>$productId,
                    'prodDesc' =>$productDesc,
                    'prodMarc' =>$productMarc,
                    'prodValue' =>$productValue,
                    'prodQtd' =>$productQtd,
                    'prodSize' =>$productSize,
                ];

                $response = self::insert($data);
                print_r($response);
                if($response === ""){
                    header("Location: /home");
                } else{
                    var_dump(self::insert($data));
                }
                
            }
        }

        private static function insert($data){
            $response = ValidateProducts::validateProduct($data);
                return $response ?? "";
            
        }
        
    }
?>