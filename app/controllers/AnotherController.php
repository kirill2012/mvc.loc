<?php

namespace controllers;

class AnotherController extends \core\Controller
{
    public function index(){
        $title = 'index';
        $data = compact('title');
        $this->render($data);
    }

    public function test(){
        $title = 'test';
        $data = compact('title');
        $this->render($data);
    }
}