<?php

namespace App\Utils;

use PDO;
use PDOException;

class DB
{
    private static $host = '127.0.0.1';
    private static $port = '5432';
    private static $dbname = 'php_atm';
    private static $user = 'postgres';
    private static $password = '1234';

    private static $instancia;

    public static function connect()
    {
        if (!isset(self::$instancia)) {
            try {
                $dsn = "pgsql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbname;

                self::$instancia = new PDO($dsn, self::$user, self::$password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]);
            } catch (PDOException $e) {
                die("ERRO DE CONEXÂO: " . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}