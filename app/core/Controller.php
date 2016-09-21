<?php

namespace core;

class Controller
{
    public function render($class, $method, $layout = 'main' , $data = null){
        ob_start();
        require str_replace('\\', '/', dirname(__DIR__) . '/views/' . substr($class, strripos($class, '\\')+1) . '/' . substr($method, strripos($method, ':') + 1) . '.php');
        $content = ob_get_clean();
        require APP . 'views\\layouts\\' . $layout . '.php';
    }

}