<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', substr(dirname(__FILE__), 0, strripos(dirname(__FILE__), '\\')). DS);
define('APP', ROOT . 'app' . DS);
define('VENDOR', ROOT . 'vendor' . DS);
define('URL', 'http://mvc.loc');

require VENDOR . 'autoload.php';

//require VENDOR . '/fzaninotto/faker/src/autoload.php';

spl_autoload_register(function ($class) {
    $file = APP . $class . '.php';
    if(file_exists($file)){
        require_once $file;
    }
});

\core\App::start();
