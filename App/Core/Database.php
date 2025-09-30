<?php

namespace App\Core;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database
{
    private static PDO $conn;

    public static function getInstance(){

        try {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../config');
            $dotenv->load();

            $host = $_ENV['DB_HOST'];
            $db   = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS'];

            self::$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }


        return self::$conn;
    }
}
