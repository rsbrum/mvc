<?php

/**
 * Base class to be used by controllers  
 */
class Controller{

    /**
     * @var object instanciates View to be used in all controllers
     */
    public $view;

    function __construct(){

        $this->view = new View();

    }

}