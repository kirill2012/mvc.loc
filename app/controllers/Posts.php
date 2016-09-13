<?php

namespace controllers;

class Posts extends Controller
{
    public function index(){
        $data = \models\Posts::findall();
        $this->render(__CLASS__, __METHOD__, $data);
    }

    public function view($id = ''){
        $data = \models\Posts::findone($id);
        $this->render(__CLASS__, __METHOD__, $data);
    }

    public function edit(){

    }

    public function update(){

    }

    public function create(){

    }

    public function store(){

    }

    public function delete(){

    }
}