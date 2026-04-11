<?php

namespace App\Controllers;

abstract class Controller
{
    protected function view(string $view)
    {
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }
}