<?php

    namespace App\Controllers;

    use App\Models\Products;
    use App\Models\ValidateProducts;
    

    class ProductController extends HomeController{
        public function show(){
            

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
                
                if($response === ""){
                    Products::insertDB($data);
                    // header("Location: /home");
                } else{
                    
                }
                
            }
        }

        private static function insert($data){
            $response = ValidateProducts::validateProduct($data);
                return $response ?? "";
            
        }
        
    }
?>