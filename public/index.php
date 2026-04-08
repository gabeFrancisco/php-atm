<?php

//Autoload manual

require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../src/controllers/AuthController.php';

$router = new Router();

$router->get("/login", [AuthController::class, 'login']);
$router->get("/registrar", [AuthController::class, 'registrar']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);