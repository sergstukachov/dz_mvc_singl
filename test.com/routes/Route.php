<?php

namespace routes;

use \configs\Config;

class Route
{
    private static $instance;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Route();
        }

        return self::$instance;
    }

    public function routing()
    {
        $routes = Config::getRoutes();
        for ($i = 0, $count = count($routes); $i < $count; $i++) {
            if ($_SERVER["REQUEST_METHOD"] === $routes[$i]["method"]
                && $_SERVER["REQUEST_URI"] === $routes[$i]["uri"]) {
                $controllerName = new $routes[$i]["controller"];
                $action = $routes[$i]["action"];
                $response = $controllerName->$action();
                if ($response) {
                    echo $response;
                } else {
                    break;
                }
            }
        }
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}