<?php

/**
 * Base class to be used by models and safely create a database connection
 */
class Model{
    
    /**
     * Returns a PDO instance
     */
    public function getConnection(){   

        try{

            $user = Config::get('DB_USER');
            $pass = Config::get('DB_PASS');

            $database = new PDO(
                Config::get('DB').":" . 
                "host=" . Config::get('DB_HOST') . ";dbname=" . 
                Config::get('DB_NAME'),
                $user,
                $pass
            );

        } catch (PDOException $e){

            echo $e->getMessage();
            
            exit();

        }

        if($database){

            return $database; 

        }

    }       

}