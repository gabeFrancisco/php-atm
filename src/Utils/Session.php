<?php

namespace App\Utils;

class Session
{
    private static $instance = null;

    private function __construct()
    {
        //se a sessão não estiver setada
        if (session_status() === PHP_SESSION_NONE) {
            session_start([
                'cookie_httponly' => true,
                'cookie_secure' => true,
                'use_strict_mode' => true,
                'cookie_samesite' => 'Lax'
            ]);
        }
    }

    public static function getInstance(): Session
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function has(string $key)
    {
        return isset($_SERVER[$key]);
    }

    public function forget(string $key)
    {
        unset($_SESSION[$key]);
    }

    //Regenera a sessão
    public function regenerate()
    {
        session_regenerate_id(true);
    }

    public function destroy()
    {
        session_unset();
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();

            setcookie(
                session_name(),
                '',
                time() - 4200,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }
    }
}