<?php

namespace app\controllers;
use app\Router;

class ProductsController
{
    public function home(Router $router) {
        $router->renderView('products/home/_home');
    }

    public function signin(Router $router) {
        echo "Signin";
    }

    public function admin(Router $router) {
        echo "Admin";
    }
}