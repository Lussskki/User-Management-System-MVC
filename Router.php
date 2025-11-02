<?php
class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve() {
        $path = rtrim(str_replace('/User-Management-System-MVC/public', '', 
        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');
        if ($path === '') $path = '/';

        $method = $_SERVER['REQUEST_METHOD'];

        $callback = $this->routes[$method][$path] ?? null;
        if (!$callback) {
            http_response_code(404);
            echo "404 - Page not found";
            exit;
        }

        echo call_user_func($callback);
    }
}
?>
