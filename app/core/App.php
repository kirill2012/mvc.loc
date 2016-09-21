<?php

namespace core;

class App
{

    public function start(){

        require APP . 'config/db.php';

        Session::start();

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


        if($_SESSION['admin'] == 0 && $controller == 'controllers\\posts') {
            $controller = 'controllers\\main';
            $action = 'login';
        }

        $controller = new $controller;
        /*
        $faker = \Faker\Factory::create();

        for($i=0;$i<10;$i++){
            $user = new \models\Users();
            $user->username = $faker->name(null);
            $user->email = $faker->email();
            $user->hash = password_hash($faker->password(), PASSWORD_DEFAULT);
            $user->save();
        }

        for($i=0;$i<50;$i++) {
            $post = new \models\Posts();
            $post->title = $faker->sentence();
            $post->text = $faker->text(500);
            $post->author_id = $faker->numberBetween(2, 18);
            $post->save();
        }
        */
        call_user_func_array([$controller, $action], $_GET);

    }

}