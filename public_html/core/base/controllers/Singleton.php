<?php


namespace core\base\controllers;


trait Singleton
{
    private static $_instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function instance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

}