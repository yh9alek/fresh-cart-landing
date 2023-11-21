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

    public function renderView($view, $params = []) {
        ob_start();
        include_once __DIR__."/views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__."/views/_layout.php";
    }
}