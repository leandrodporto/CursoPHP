<?php 

function controller($matchedUri, $params)
{
    [$controller, $method] = explode('@', array_values($matchedUri)[0]);

    $controllerWithNamespace = CONTROLLER_PATH . $controller;

    if(!class_exists($controllerWithNamespace)){
        throw new Exception("Controller {$controller} não existe");
    }

    $controllerIntance = new $controllerWithNamespace;

    if(!method_exists($controllerIntance, $method)){
        throw new Exception("O método {$method} não existe no controller {$controller}");
    }

   $controller =  $controllerIntance->$method($params);

   if($_SERVER['REQUEST_METHOD']=== 'POST'){
        die();
   }

   return $controller;
}