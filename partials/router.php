<?php
require_once __DIR__ . '/utilities/httpError.php';

class Router
{
    private $routes = [];

    public function addRoute($method, $path, $action, $name)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action,
            'name' => $name
        ];
    }

    public function handleRequest($method, $path)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] == $method && $route['path'] == $path) {
                if ($route['method'] != $method) {
                    httpBadRequest();
                }

                $action = $route['action'];
                $requestData = $route['method'] == 'GET' ? $_GET : $_POST;
                $action($requestData);

                return;
            }
        }

        httpNotFound();
    }
}
