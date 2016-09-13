<?php

namespace controllers;

class Controller
{
    public function render($class, $method, $data = null){
        require_once str_replace('\\', '/', dirname(__DIR__) . '/views/' . substr($class, strripos($class, '\\')+1) . '/' . substr($method, strripos($method, ':') + 1) . '.php');
    }

}