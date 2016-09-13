<?php

namespace core;


class App
{
    public function start(){

        $controller = 'controllers\\main';
        $action = 'index';

        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $route_pieces = explode('/', $route);

        if (file_exists(str_replace('\\', '/', dirname(__DIR__) . '/controllers/' . $route_pieces[1] . '.php'))){
            $controller = 'controllers\\' . $route_pieces[1];
            if(method_exists($controller, $route_pieces[2])){
                $action = $route_pieces[2];
            }
        }elseif(method_exists('controllers\\main', $route_pieces[1])){
            $action = $route_pieces[1];
        }
        $controller = new $controller;

        call_user_func_array([$controller, $action], $_GET);

    }

}