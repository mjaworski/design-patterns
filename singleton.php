<?php

class Singleton {

    private static $oInstance = null;

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    public static function getInstance() {
        if (self::$oInstance === null) {
            self::$oInstance = new self();
        }
        return self::$oInstance;
    }

}

$oSingleton = Singleton::getInstance();
