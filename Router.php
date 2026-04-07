<?php

class Router
{
    protected array $routes = [];

    public function add(string $method, string $uri, array $action)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function get(string $uri, array $action)
    {
        $this->add('GET', $uri, $action);
    }

    public function post(string $uri, array $action)
    {
        $this->add('POST', $uri, $action);
    }

    public function put(string $uri, array $action)
    {
        $this->add('PUT', $uri, $action);
    }

    public function delete(string $uri, array $action)
    {
        $this->add('DELETE', $uri, $action);
    }

    public function dispatch(string $uri, string $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['uri'] == $uri) {
                $action = $route['action'];

                if (is_array($action)) {
                    $controllerName = $action[0];
                    $methodName = $action[1];

                    $controller = new $controllerName();
                    return $controller->$methodName();
                }
            }
        }

        http_response_code(404);
        echo "Página não encontrada!";
    }
}