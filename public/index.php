<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\ProductsController;

$router = new Router();

$router->get('/', [ProductsController::class, 'home']);
$router->post('/', [ProductsController::class, 'home']);
$router->get('/home', [ProductsController::class, 'home']);
$router->post('/home', [ProductsController::class, 'home']);

$router->resolve();