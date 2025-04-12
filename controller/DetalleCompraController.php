<?php
namespace Controllers;

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../models/CompraDetalle.php';

use Database\Database;
use Models\CompraDetalle;

class CompraDetalleController
{
    private CompraDetalle $compraDetalleModel;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->compraDetalleModel = new CompraDetalle($pdo);
    }

    public function guardarDetalle(): void
    {
        $compraId = intval($_POST['compra_id'] ?? 0);
        $producto = trim($_POST['producto'] ?? '');
        $cantidad = intval($_POST['cantidad'] ?? 0);
        $precioUnitario = floatval($_POST['precio_unitario'] ?? 0);

        $resultado = $this->compraDetalleModel->insertarDetalle($compraId, $producto, $cantidad, $precioUnitario);

        header('Content-Type: application/json');
        echo json_encode([
            'success' => (bool)$resultado,
            'message' => $resultado ? 'Detalle de compra guardado correctamente.' : 'Error al guardar el detalle.'
        ]);
    }

    public function obtenerDetallesPorCompra(): void
    {
        $id = $_GET['compra_id'] ?? '';
        $detalles = $this->compraDetalleModel->obtenerDetallesPorCompra($id);
        header('Content-Type: application/json');
        echo json_encode($detalles);
    }
}
