<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午10:40
 */

class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            return new Singleton();
        }

        return self::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}