<?php
namespace Database;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $conn = null;

    public static function getConnection(): ?PDO
    {
        if (self::$conn === null) {
            try {
                $config = include __DIR__ . '/../database/config.php';

                self::$conn = new PDO(
                    "mysql:host={$config['db_host']};dbname={$config['db_name']}",
                    $config['db_user'],
                    $config['db_pass'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
                    ]
                );
            } catch (PDOException $e) {
                error_log("Error de conexión: " . $e->getMessage());
                die("Error de conexión a la base de datos.");
            }
        }
        return self::$conn;
    }

    public static function closeConnection(): void
    {
        self::$conn = null;
    }
}

