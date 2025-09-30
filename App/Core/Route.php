<?php

namespace App\Core;

class Route
{
    private static string $route;

    private static function getRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function get(string $uri, array $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            if (self::getRoute() == $uri) {
                $obj = new $controller[0];
                $method = $controller[1];

                $obj->$method();
            }

        }
    }
    public static function post(string $uri, array $controller) {}
    public static function put(string $uri, array $controller) {}
    public static function delete(string $uri, array $controller) {}
}
