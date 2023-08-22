<?php

namespace Core\Routing;

class Route
{
    public static $validRoute = array();

    public static function set($route, $method)
    {
        self::$validRoute = $route;

        if (static::requestedUrl() == $route) {
            $method->__invoke();
        }
    }

    protected static function requestedUrl(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
