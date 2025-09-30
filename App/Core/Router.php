<?php 

namespace App\Core;

class Router
{
    private static array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
    ];

    public static function get(string $uri, array $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post(string $uri, array $action)
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch(string $uri, string $method)
    {
        $method = strtoupper($method);

        if (isset(self::$routes[$method][$uri])) {
            [$controller, $function] = self::$routes[$method][$uri];
            $instance = new $controller;
            return $instance->$function();
        }

        http_response_code(404);
        echo "Rota não encontrada";
        exit;
    }
}