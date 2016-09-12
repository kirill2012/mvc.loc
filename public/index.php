<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', dirname(__DIR__) . '/app/' . $class . '.php');
    if(file_exists($file)){
        require_once $file;
    }else{
        echo 'not exists';
    }

});

$app = new \core\App();
$app->start();