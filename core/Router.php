<?php


class Router {
    protected $routes = [];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri, $request_method) {
        $request_method = strtolower($request_method);

        if (! array_key_exists($uri, $this->routes)) {
            throw new Exception('No route defined for this URI.');
        }

        if (! array_key_exists($request_method, $this->routes[$uri])) {
            throw new Exception('Not a valid request method for this URI.');
        }

        return $this->routes[$uri][$request_method];
    }

    public function get($uri, $controller) {
        $this->routes[$uri]["get"] = $controller;
        return $this;
    }

    public function post($uri, $controller) {
        $this->routes[$uri]["post"] = $controller;
        return $this;
    }

    public function put($uri, $controller) {
        $this->routes[$uri]["put"] = $controller;
        return $this;
    }

    public function delete($uri, $controller) {
        $this->routes[$uri]["delete"] = $controller;
        return $this;
    }

    public function patch($uri, $controller) {
        $this->routes[$uri]["patch"] = $controller;
        return $this;
    }

}
