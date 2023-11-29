<?php

namespace app\controllers;
use app\Router;

class Controller
{
    public function home(Router $router) {
        $router->renderView('/home/_home');
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

    public function wishlist(Router $router) {
        $router->renderView('/home/wishlist');
    }

    public function admin(Router $router) {
        $router->renderView('/admin/admin');
    }
}