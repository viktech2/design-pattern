<?php
class Singleton {
    // unique instance
    private static $instance = null;

    // Private constructor hidden from outside of the class
    // prevent you from instantiating the class with "new".
    private function __construct(){
    }
    
    // Method to get the unique instance
    public static function getInstance(){

        // Create instance if it doesn't exist
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
            echo 'Creating new instance';
        }

        // Return the unique instance.

        return self::$instance;
    }

    public function printSingleton(){
        echo 'Inside print Singleton';
    }

}

$single1 = Singleton::getInstance();echo PHP_EOL;
$single1::printSingleton();echo PHP_EOL;

$single2 = Singleton::getInstance();//echo PHP_EOL;
$single2::printSingleton();echo PHP_EOL;

$single3 = Singleton::getInstance();//echo PHP_EOL;
$single3::printSingleton();echo PHP_EOL;


// Output
/*
Creating new instance
Inside print Singleton
Inside print Singleton
Inside print Singleton
 */
