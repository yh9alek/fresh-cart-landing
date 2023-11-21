<?php

namespace app;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve() {
        $currentURL = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        $fn = null;

        if($method === 'GET') $fn = $this->getRoutes[$currentURL] ?? null;
        else $fn = $this->postRoutes[$currentURL] ?? null;

        if($fn) {
            $ins = new $fn[0]();
            call_user_func([$ins, $fn[1]], $this);
        }
        else echo "Page not found";
    }
}