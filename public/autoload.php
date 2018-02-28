<?php


function __autoload($classname) {
        
    $path = '../application/core/' . $classname . '.php';

    if(file_exists($path)){

        require_once $path;

    }

    $path2 = '../application/models/' . $classname . '.php';

    if(file_exists($path2)){

        require_once $path2;

    }

}