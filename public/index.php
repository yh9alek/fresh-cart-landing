<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\Controller;

$router = new Router();

$router->get('/', [Controller::class, 'home']);
$router->post('/', [Controller::class, 'home']);
$router->get('/home', [Controller::class, 'home']);
$router->post('/home', [Controller::class, 'home']);
$router->get('/signup', [Controller::class, 'signup']);
$router->post('/signup', [Controller::class, 'signup']);
$router->get('/signin', [Controller::class, 'signin']);
$router->post('/signin', [Controller::class, 'signin']);
$router->get('/reset', [Controller::class, 'reset']);
$router->post('/reset', [Controller::class, 'reset']);
$router->get('/wishlist', [Controller::class, 'wishlist']);
$router->post('/wishlist', [Controller::class, 'wishlist']);

$router->resolve();