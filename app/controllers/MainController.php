<?php

namespace controllers;

use core\Controller;
use core\Session;

class MainController extends Controller
{
    public function index($page = 1, $perpage=5){
        $title = 'Main';
        $lastPage = ceil(\models\Posts::count() / $perpage);
        $posts = \models\Posts::take($perpage)->skip(($page-1)*$perpage)->get();
        $data = compact('title', 'posts', 'lastPage');
        $this->render('main', $data);
    }

    public function view($id = ''){
        $title = 'View';
        $post = \models\Posts::find($id);
        $data = compact('title', 'post');
        $this->render('main', $data);
    }

    public function register(){
        $this->render();
    }

    public function store(){
        $user = new \models\Users();
        $user->username = $_POST['name'];
        $user->email = $_POST['email'];
        $user->hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $user->save();
        echo '<script type="text/javascript"> window.location.href="' . URL . '/login"</script>';
    }

    public function login(){
    $this->render();
    }

    public function logout(){
        Session::stop();
        echo '<script type="text/javascript"> window.location.href="' . URL . '"</script>';
    }

    public function check(){

        if ($_POST['funct'] == 'name') {
            $user = \models\Users::where('username', '=', $_POST['username'])->first();
            if ($user['username']) {
                echo 1;
            } else {
                echo 0;
            }
        }elseif ($_POST['funct'] == 'email') {
            $user = \models\Users::where('email', '=', $_POST['email'])->first();
            if ($user['username']){
                echo 1;
            }else {
                echo 0;
            }
        }elseif($_POST['funct'] == 'pass'){
            $user = \models\Users::where('username', '=', $_POST['username'])
                ->first();
            if(password_verify($_POST['password'], $user['hash'])){
                $_SESSION['username'] = $user['username'];
                $_SESSION['admin'] = $user['admin'];
                echo 1;
            }else {
                echo 0;
            }
        }
    }
}