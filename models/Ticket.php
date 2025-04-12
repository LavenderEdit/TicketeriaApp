<?php
namespace Models;
require_once __DIR__ . '/../models/BaseModel.php';

class Ticket extends BaseModel
{
    private int $id;
    private string $titulo;
    private string $descripcion;
    private string $estado;
    private string $prioridad;
    private string $fecha_creacion;
    private int $creador_id;
    private ?int $asignado_id;
    private ?int $compra_id;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }

    public function insertarTicket(string $titulo, string $descripcion, string $estado, string $prioridad, int $creadorId, ?int $asignadoId = null, ?int $compraId = null)
    {
        return $this->callProcedure('Insert', [
            $titulo, $descripcion, $estado, $prioridad, $creadorId, $asignadoId, $compraId
        ]);
    }

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function getEstado(): string
    {
        return $this->estado;
    }
    public function getPrioridad(): string
    {
        return $this->prioridad;
    }
    public function getFechaCreacion(): string
    {
        return $this->fecha_creacion;
    }
    public function getCreadorId(): int
    {
        return $this->creador_id;
    }
    public function getAsignadoId(): ?int
    {
        return $this->asignado_id;
    }
    public function getCompraId(): ?int
    {
        return $this->compra_id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }
    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }
    public function setPrioridad(string $prioridad): void
    {
        $this->prioridad = $prioridad;
    }
    public function setFechaCreacion(string $fechaCreacion): void
    {
        $this->fecha_creacion = $fechaCreacion;
    }
    public function setCreadorId(int $creadorId): void
    {
        $this->creador_id = $creadorId;
    }
    public function setAsignadoId(?int $asignadoId): void
    {
        $this->asignado_id = $asignadoId;
    }
    public function setCompraId(?int $compraId): void
    {
        $this->compra_id = $compraId;
    }
}