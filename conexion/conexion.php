<?php

class Conexion
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $config = require __DIR__ . './conexion/config.php';

        try {
            $dsn = "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $config['DB_USER'], $config['DB_PASS']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo 'Si me conecte!!';
        } catch (PDOException $e) {
            throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Conexion();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }

    public function closeConnection()
    {
        $this->pdo = null;
        self::$instance = null;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
