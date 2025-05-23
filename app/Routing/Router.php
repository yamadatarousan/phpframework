<?php
namespace MyFramework\Routing;

class Router
{
    protected static $routes = [];

    public static function get($uri, $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function dispatch($method, $uri)
    {
        $routes = self::$routes[$method] ?? [];
        foreach ($routes as $route => $action) {
            // 簡単な動的ルート対応（例: /users/{id}）
            $pattern = preg_replace('#\{[a-zA-Z0-9]+\}#', '([a-zA-Z0-9]+)', $route);
            if (preg_match("#^$pattern$#", $uri, $matches)) {
                array_shift($matches); // 最初のマッチ（全体）は不要
                return self::callAction($action, $matches);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }

    protected static function callAction($action, $params)
    {
        [$controller, $method] = $action;
        $controller = new $controller();
        return call_user_func_array([$controller, $method], $params);
    }
}