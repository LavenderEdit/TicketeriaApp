<?php
namespace Controllers;

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../models/Usuario.php';

use Database\Database;
use Models\Usuario;

class UsuarioController
{
    private Usuario $usuarioModel;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->usuarioModel = new Usuario($pdo);
    }

    public function guardarUsuario(): void
    {
        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $fechaLogeo = trim($_POST['fecha_logeo'] ?? '');
        $contrasena = trim($_POST['contrasena'] ?? '');
        $foto = trim($_POST['foto'] ?? '');
        $tipoUsuarioId = intval($_POST['tipo_usuario_id'] ?? 0);

        $resultado = $this->usuarioModel->insertarUsuario($nombre, $telefono, $email, $fechaLogeo, $contrasena, $foto, $tipoUsuarioId);

        header('Content-Type: application/json');
        echo json_encode([
            'success' => (bool)$resultado,
            'message' => $resultado ? 'Usuario creado correctamente.' : 'Error al crear el usuario.'
        ]);
    }

    public function obtenerUsuarios(): void
    {
        $usuarios = $this->usuarioModel->obtenerUsuarios();
        header('Content-Type: application/json');
        echo json_encode($usuarios);
    }

    public function obtenerUsuarioPorId(): void
    {
        $id = $_GET['id'] ?? '';
        $usuario = $this->usuarioModel->obtenerUsuarioPorId($id);
        header('Content-Type: application/json');
        echo json_encode($usuario);
    }

    public function obtenerClientesTecnicos(): void
    {
        $resultados = $this->usuarioModel->obtenerClientesTecnicos();
        header('Content-Type: application/json');
        echo json_encode($resultados);
    }
}