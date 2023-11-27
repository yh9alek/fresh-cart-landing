<?php

namespace app\controllers;
use app\Router;

class Controller
{
    public function home(Router $router) {
        $router->renderView('products/home/_home');
    }

    public function signup(Router $router) {
        $router->renderView('users/signup');
    }

    public function signin(Router $router) {
        $router->renderView('users/signin');
    }

    public function reset(Router $router) {
        $router->renderView('users/reset');
    }
}