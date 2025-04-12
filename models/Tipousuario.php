<?php
namespace Models;
require_once __DIR__ . '/../models/BaseModel.php';

class TipoUsuario extends BaseModel
{
    private int $id;
    private string $tipo_primario;
    private string $tipo_secundario;
    private string $descripcion;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }

    // Procedimiento almacenado
    public function insertarTipoUsuario(string $tipoPrimario, string $tipoSecundario, string $descripcion)
    {
        return $this->callProcedure('Insert', [$tipoPrimario, $tipoSecundario, $descripcion]);
    }

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getTipoPrimario(): string
    {
        return $this->tipo_primario;
    }

    public function getTipoSecundario(): string
    {
        return $this->tipo_secundario;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTipoPrimario(string $tipoPrimario): void
    {
        $this->tipo_primario = $tipoPrimario;
    }

    public function setTipoSecundario(string $tipoSecundario): void
    {
        $this->tipo_secundario = $tipoSecundario;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
}