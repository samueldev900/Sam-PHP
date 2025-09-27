<?php 

namespace App\Core;

class Route
{
    private static string $route;

    private static function getRoute()
    {   
        print_r($_SERVER['REQUEST_URI']);
    }

    public static function get(string $uri, array $controller)
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            echo '<pre>';
            print_r($controller);
            echo '</pre>';

            $obj = new $controller[0];
            var_dump($obj);
            
            echo self::getRoute();
        }
    }
    public static function post(string $uri, array $controller)
    {

    }
    public static function put(string $uri, array $controller)
    {

    }
    public static function delete(string $uri, array $controller)
    {

    }
}