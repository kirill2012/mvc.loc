<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection(array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'mvc',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
));

$capsule->setAsGlobal();
$capsule->bootEloquent();

