<?php
require_once __DIR__ . '/utilities/httpError.php';

class Router
{
    private $routes = [];
    private $notFoundHandler = 'httpNotFound';

    public function addRoute($method, $path, $action)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action
        ];
    }

    public function handleRequest($method, $path)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] == $method && $route['path'] == $path) {
                $action = $route['action'];
                $requestData = $route['method'] == 'GET' ? $_GET : $_POST;
                $action($requestData);

                return;
            }
        }

        call_user_func($this->notFoundHandler);
    }

    public function setNotFoundHandler($handler)
    {
        $this->notFoundHandler = $handler;
    }
}
