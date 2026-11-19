<?php
namespace Core;

class Container {
    private $bindings = [];

public function bind($key, $resolver){
    $this->bindings[$key] = $resolver;

}

public function resolve($key){
    if(!array_key_exists($key, $this->bindings)){
        throw new \Exception("No resolver found for {$key}.");
         }

    if(array_key_exists($key,$this->bindings)){
        return call_user_func($this->bindings[$key]);
    }
}
}