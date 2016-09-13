<?php

namespace controllers;


class User
{
    public function index(){
        $data = \models\User::findall();

        require_once str_replace('\\', '/', dirname(__DIR__) . '/views/' . substr(__CLASS__, strripos(__CLASS__, '\\')+1) . '/' . substr(__METHOD__, strripos(__METHOD__, ':') + 1) . '.php');
    }

    public function view($id = ''){
        $data = \models\User::findone($id);

        require_once str_replace('\\', '/', dirname(__DIR__) . '/views/' . substr(__CLASS__, strripos(__CLASS__, '\\')+1) . '/' . substr(__METHOD__, strripos(__METHOD__, ':') + 1) . '.php');
    }
}