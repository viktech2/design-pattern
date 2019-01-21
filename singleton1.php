<?php

class Singleton {
    // Unique instance.
    private static $instance = null;

    // Private constructor prevent you from instancing the class with "new".
    private function __construct() {  
    }

    // Method to get the unique instance.
    public static function getInstance() {
        // Create the instance if it does not exist.
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();  
        }

        // Return the unique instance.
        return self::$instance;
    }
}


$single1 = Singleton::getInstance();
$single2 = Singleton::getInstance();

if($single1 == $single2)
    echo 'true';