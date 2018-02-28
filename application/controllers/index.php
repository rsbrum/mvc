<?php


class index extends Controller{
    
    function __construct(){

        parent::__construct();

    }

    public function index(){

        $this->view->renderView('index/index');

    }

}