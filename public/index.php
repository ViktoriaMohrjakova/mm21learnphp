<?php

spl_autoload_register(function ($className){
    
    $className = substr($className, 4);
    //var_dump($className);
    require_once __DIR__ . "/../src/$className.php";
});


//
use App\Animals\Dog as Doggo;

$router = new App\Router();
var_dump(new Doggo());




//var_dump($_SERVER);
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo 'Home page';
        break;
    case '/about':
        echo 'About';
        break;
    default:
        echo '404';
        break;
}