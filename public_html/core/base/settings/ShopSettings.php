<?php


namespace core\base\settings;

use core\base\controllers\Singleton;
use core\base\settings\Settings;

class ShopSettings
{
    use Singleton;

    private $baseSettings;

    private $routes = [
        'plugins' => [
            'dir' => false,
            'routes' => [

            ]
        ],
        'single' => [
            4, 5, 63
        ]
    ];

    public static function get($property) {
        return self::getInstance()->$property;
    }

    private static function getInstance(){
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::instance()->baseSettings = Settings::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());
        self::$_instance->setProperty($baseProperties);

        return self::$_instance;
    }

    protected function setProperty($properties) {

        if($properties) {
            foreach ($properties as $name => $property) {
                $this->$name = $property;
            }
        }

    }

}