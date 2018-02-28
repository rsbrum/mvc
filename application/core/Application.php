<?php

/**
 * Bootstraps the application and sets the controller, method and params
 */
class Application{
    
    /**
     * @var private default controller = index
     * @var private defaul method = index
     * @var private params are set to null and only one param can be passed 
     */
    private $controller = null;
    private $method = null;
    private $params = null;

    function __construct(){
        
        $this->router();
        $path = Config::get('PATH_APP') . 'controllers/' . $this->controller . '.php';
        
        if(file_exists($path)){

            require $path;

            $this->controller = new $this->controller;
            
            if(isset($this->method)){

                $method = $this->method;
                $this->controller->$method();

            } 
            
        }else{

            echo "File not found!";

        }

    }

    /**
     * Sets the controller, method and parameters - if none is provided they are set to default
     * routing is done through the URL and they are extracted from it respectively 
     * 
     * e.g: host/home/cars/bmw
     * 
     * Controller = home, Method = cars, Param = bmw 
     */
    private function router(){

        if(isset( $_GET['url'])){

            //url trimming
            $url =  $_GET['url'];
            $url = explode('/', $url);

            $this->controller = $url[0];

            if(isset($url[1])){

                $this->method = $url[1];
                
                if(isset($url[2])){

                    $this->params = $url[2];

                }

            }

        } else{

            $this->controller = Config::get('DEFAULT_CONTROLLER');
            $this->method = Config::get('DEFAULT_METHOD');

        }
        
    }

}