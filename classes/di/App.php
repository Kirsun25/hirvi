<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14.09.19
 * Time: 21:04
 */

namespace di;


class App
{
    private static $container;

    public static function get()
    {
        if(!self::$container){
            self::$container = new Container();
        }
        return self::$container;
    }
}