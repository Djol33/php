<?php

namespace App\Route;

class Route
{
    public static $validRoute = array();
    public static function  set($route, $method){
        self::$validRoute = $route;

        if($_GET["url"] == $route){
            $method->__invoke();

            return;

        }

    }

}