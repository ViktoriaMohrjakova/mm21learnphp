<?php

//var_dump($_SERVER);

switch($_SERVER['REQUEST_URI']){
case'/':
    echo 'Home page';
    break;
case'/about':
    echo 'About';
    break;
default:
echo '404';
break;

}