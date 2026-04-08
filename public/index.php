<?php

//Autoload manual

require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../src/controllers/LoginController.php';

$router = new Router();

$router->get("/login", [LoginController::class, 'index']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);