<?php

namespace TicketingSystem\Conexion;

use PDO;
use PDOException;

class Conexion {
    private $servername = "sv-eddy.mysql.database.azure.com";
    private $username = "BDG3";
    private $password = "BD-G3-2025";
    private $dbname = "TicketingSystemDB";
    private $conn;

    public function __construct() {
        try {
            // Ruta al certificado SSL
            $ssl_cert = "../ssl/DigiCertGlobalRootCA.crt.pem";

            // Configuración de la conexión con SSL
            $options = [
                PDO::MYSQL_ATTR_SSL_CA => $ssl_cert,
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true, // Puedes desactivar la verificación del certificado cambiando a false(opcional)
            ];

            // Crear la conexión PDO con SSL
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->dbname",
                $this->username,
                $this->password,
                $options
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión exitosa";
        } catch(PDOException $e) {
            error_log("Error en la conexión: " . $e->getMessage());
            echo "Hubo un error al conectar con la base de datos. Por favor, inténtalo de nuevo más tarde.";
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>