<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH."Core/function.php";

spl_autoload_register(function ($class) {
   
    $class= str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path('bootstrap.php');
//require base_path("Core/routing.php");
$routes = new Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//$routes= require base_path('routes.php');
 require base_path('routes.php');

 $method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];
//print($method);

 $routes->route($uri, $method);
/*
function routingToPage($uri, $routes){
if(array_key_exists($uri, $routes)){
     require_once base_path($routes[$uri]); 
}else{
    abort();

};
}



routingToPage($uri, $routes);
*/