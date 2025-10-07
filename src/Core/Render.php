<?php

    namespace App\Core;

    class Render{

        public function render(string $template, array $data){
            extract($data);

            require __DIR__ ."/../Views/$template.php";
        }
    }

?>