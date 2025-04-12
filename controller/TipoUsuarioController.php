<?php
namespace Controllers;

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../models/TipoUsuario.php';

use Database\Database;
use Models\TipoUsuario;

class TipoUsuarioController
{
    private TipoUsuario $tipoUsuarioModel;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->tipoUsuarioModel = new TipoUsuario($pdo);
    }

    public function guardarTipoUsuario(): void
    {
        $tipoPrimario = trim($_POST['tipo_primario'] ?? '');
        $tipoSecundario = trim($_POST['tipo_secundario'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');

        $resultado = $this->tipoUsuarioModel->insertarTipoUsuario($tipoPrimario, $tipoSecundario, $descripcion);

        header('Content-Type: application/json');
        echo json_encode([
            'success' => (bool)$resultado,
            'message' => $resultado ? 'Tipo de usuario guardado correctamente.' : 'Error al guardar el tipo de usuario.'
        ]);
    }

    public function obtenerTiposUsuario(): void
    {
        $tipos = $this->tipoUsuarioModel->obtenerTiposUsuario();
        header('Content-Type: application/json');
        echo json_encode($tipos);
    }

    public function obtenerTipoUsuarioPorId(): void
    {
        $id = $_GET['id'] ?? '';
        $tipo = $this->tipoUsuarioModel->obtenerTipoUsuarioPorId($id);
        header('Content-Type: application/json');
        echo json_encode($tipo);
    }
}