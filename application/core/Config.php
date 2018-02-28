<?php 

/**
 * Returns an array with all config info
 */
class Config{

    private static $config;

    public static function get($info){

        if(!self::$config){

            self::$config = require dirname(__DIR__) . '/config/config.php';

        }

        return self::$config[$info];

    }

}


