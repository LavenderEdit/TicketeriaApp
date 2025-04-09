<?php
namespace TicketingSystem\PHP;

require_once '../models/Tecnicos.php';

use TicketingSystem\Models\Tecnicos;
use PDO;
use PDOException;

class ListarTecnicos {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function ObtenerTecnicos() {
        $lista = [];
        $conn = $this->conexion->getConnection();

        try {
            // Usando tu procedimiento almacenado existente
            $stmt = $conn->prepare("CALL ObtenerClientesTecnicos()");
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $lista[] = new Tecnicos(
                    $row['nombre'],
                    $row['telefono'],
                    $row['email'],
                    $row['tipo_usuario']
                );
            }
        } catch (PDOException $e) {
            error_log("Error en ListarTecnicos: " . $e->getMessage());
            throw new \Exception("Error al obtener la lista de técnicos");
        } finally {
            $this->conexion->closeConnection();
        }

        return $lista;
    }
}
?>