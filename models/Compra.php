<?php
namespace Models;
require_once __DIR__ . '/../models/BaseModel.php';

class Compra extends BaseModel
{
    private int $id;
    private int $tecnico_id;
    private string $fecha;
    private float $total;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }

    public function insertarCompra(int $tecnicoId, float $total)
    {
        return $this->callProcedure('Insert', [$tecnicoId, $total]);
    }

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }
    public function getTecnicoId(): int
    {
        return $this->tecnico_id;
    }
    public function getFecha(): string
    {
        return $this->fecha;
    }
    public function getTotal(): float
    {
        return $this->total;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTecnicoId(int $tecnicoId): void
    {
        $this->tecnico_id = $tecnicoId;
    }
    public function setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

}