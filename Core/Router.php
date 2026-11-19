<?php
namespace Core;
class Router {
    protected $routes = [];

    public function add($method, $uri, $contoller){
        $this->routes[ ] = [
            'method'=>$method,
            'uri'=>$uri,
            'controller'=>$contoller];
    }

    public function get($uri, $controller){
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller){
        $this->add('POST', $uri, $controller);

    }

    public function delete($uri, $controller){
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller){
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller){
        $this->add('PUT', $uri, $controller);

    }

    public function route($uri, $method){
        foreach ($this -> routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
    }
    $this->abort('404');
    }

    public function abort($code = '404'){

    http_response_code($code);

    require_once base_path("views/{$code}.view.php");
    
    die();

}

    

}

/* 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//$routes= require base_path('routes.php');
$routes= require base_path('routes.php');

function routingToPage($uri, $routes){
if(array_key_exists($uri, $routes)){
     require_once base_path($routes[$uri]); 
}else{
    abort();

};
}



routingToPage($uri, $routes); */