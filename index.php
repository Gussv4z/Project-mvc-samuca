<?php

    require __DIR__ . "/./vendor/autoload.php";
    require_once __DIR__ . '/./src/Routes/Main.php';

    use App\Core\Core;
    use App\Routes\Router;

    Core::dispatch(Router::getRoutes());
    
?>
