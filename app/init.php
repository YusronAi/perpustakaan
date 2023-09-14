<?php

// spl_autoload_register(function($class){
//     require_once (__DIR__ . '/core/' . $class . '.php');
//     var_dump($class);
// });

// Panggil file config untuk menyambungkan database
require_once(__DIR__.'/config/Config.php');

require_once(__DIR__.'/core/Database.php');
require_once(__DIR__.'/core/Controller.php');
require_once(__DIR__.'/core/App.php');
require_once(__DIR__.'/core/Flash.php');