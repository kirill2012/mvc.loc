<?php

namespace controllers;

class Another extends \core\Controller
{
    public function index(){
        $this->render(__CLASS__, __METHOD__);
    }

    public function test(){
        $this->render(__CLASS__, __METHOD__);
    }
}