<?php


// Autoload

use libraries\boots;

spl_autoload_register(function($className){
    $className = str_replace("\\", "/", $className);
    require_once $className . ".php";
});

$boots = new boots();



















?>