<?php
namespace Controllers;

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../models/Compra.php';

use Database\Database;
use Models\Compra;

class CompraController
{
    private Compra $compraModel;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->compraModel = new Compra($pdo);
    }

    public function guardarCompra(): void
    {
        $usuarioId = intval($_POST['usuario_id'] ?? 0);
        $descripcion = trim($_POST['descripcion'] ?? '');
        $total = floatval($_POST['total'] ?? 0);

        $resultado = $this->compraModel->insertarCompra($usuarioId, $descripcion, $total);

        header('Content-Type: application/json');
        echo json_encode([
            'success' => (bool)$resultado,
            'message' => $resultado ? 'Compra registrada correctamente.' : 'Error al registrar la compra.'
        ]);
    }

    public function obtenerCompras(): void
    {
        $compras = $this->compraModel->obtenerCompras();
        header('Content-Type: application/json');
        echo json_encode($compras);
    }

    public function obtenerCompraPorId(): void
    {
        $id = $_GET['id'] ?? '';
        $compra = $this->compraModel->obtenerCompraPorId($id);
        header('Content-Type: application/json');
        echo json_encode($compra);
    }
}