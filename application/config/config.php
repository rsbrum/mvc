<?php

    $root = dirname(__DIR__) .'/';

return array(
    
    
    /**
     * PATHS
     */

     'PATH_DIR' => '',
     'PATH_APP' => $root ,
     'PATH_PUBLIC' => '../../public/',
     'PATH_CONTROLLER' => '../controllers/',
     'PATH_VIEW' => $root . 'views/',


    /**
     * DATABASE INFO
     */
    'DB' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'mvc',
    'DB_USER' => 'root',
    'DB_PASS' => '',


    /**
     * DEFAULT CONTROLLER/METHOD
     */
    'DEFAULT_CONTROLLER' => 'index',
    'DEFAULT_METHOD' => 'index'
    
);