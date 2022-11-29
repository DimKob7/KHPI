<?php

class Singleton
{
    private static $instances = [];

    protected function __construct() { }
    
    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton");
    }

    public static function getInstance()
    {
        $className = static::class;
        echo "\n" . $className;
        
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new static();
        }

        return self::$instances[$className];
    }
}
