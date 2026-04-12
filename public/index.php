<?php

//Autoload manual

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Router.php';

use App\Controllers\AuthController;

$router = new Router();

$router->get("/login", [AuthController::class, 'login']);
$router->post("/login", [AuthController::class, 'login_post']);
$router->get("/registrar", [AuthController::class, 'registrar']);
$router->get('/index', [AuthController::class, 'index']);
$router->post("/registrar", [AuthController::class, 'registrar_post']);
// $router->get('/registro_concluido', [AuthController::])

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);