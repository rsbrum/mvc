<?php

/**
 * Render views  
 */
class View{

    /**
     * Renders only a single view
     */
    public function renderView($view){

        require_once Config::get('PATH_VIEW') . '_templates/header.php';
        require_once Config::get('PATH_VIEW') . $view .'.php';
        require_once Config::get('PATH_VIEW') . '_templates/footer.php';
        
    }

}