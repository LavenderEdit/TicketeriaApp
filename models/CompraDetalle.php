<?php
namespace Models;
require_once __DIR__ . '/../models/BaseModel.php';

class CompraDetalle extends BaseModel
{
    private int $id;
    private int $compra_id;
    private string $componente;
    private int $cantidad;
    private float $precio;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }

    public function insertarDetalle(int $compraId, string $componente, int $cantidad, float $precio)
    {
        return $this->callProcedure('Insert', [$compraId, $componente, $cantidad, $precio]);
    }

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }
    public function getCompraId(): int
    {
        return $this->compra_id;
    }
    public function getComponente(): string
    {
        return $this->componente;
    }
    public function getCantidad(): int
    {
        return $this->cantidad;
    }
    public function getPrecio(): float
    {
        return $this->precio;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setCompraId(int $compraId): void
    {
        $this->compra_id = $compraId;
    }
    public function setComponente(string $componente): void
    {
        $this->componente = $componente;
    }
    public function setCantidad(int $cantidad): void
    {
        $this->cantidad = $cantidad;
    }
    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }
}