<?php
namespace Models;
require_once __DIR__ . '/../models/BaseModel.php';

class Usuario extends BaseModel
{
    private int $id;
    private string $nombre;
    private string $telefono;
    private string $email;
    private string $fecha_logeo;
    private string $contrasena;
    private string $foto;
    private int $tipo_usuario_id;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }

    public function insertarUsuario(string $nombre, string $telefono, string $email, string $fechaLogeo, string $contrasena, string $foto, int $tipoUsuarioId)
    {
        return $this->callProcedure('Insert', [$nombre, $telefono, $email, $fechaLogeo, $contrasena, $foto, $tipoUsuarioId]);
    }

    public function obtenerClientesTecnicos()
{
    return $this->callProcedure('Obtener_clientes_tecnicos', []);
}

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getTelefono(): string
    {
        return $this->telefono;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getFechaLogeo(): string
    {
        return $this->fecha_logeo;
    }
    public function getContrasena(): string
    {
        return $this->contrasena;
    }
    public function getFoto(): string
    {
        return $this->foto;
    }
    public function getTipoUsuarioId(): int
    {
        return $this->tipo_usuario_id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setFechaLogeo(string $fechaLogeo): void
    {
        $this->fecha_logeo = $fechaLogeo;
    }
    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }
    public function setFoto(string $foto): void
    {
        $this->foto = $foto;
    }
    public function setTipoUsuarioId(int $tipoUsuarioId): void
    {
        $this->tipo_usuario_id = $tipoUsuarioId;
    }

}
