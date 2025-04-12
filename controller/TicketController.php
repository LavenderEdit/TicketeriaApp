<?php
namespace Controllers;

require_once __DIR__ . '/../database/database.php';
require_once __DIR__ . '/../models/Ticket.php';

use Database\Database;
use Models\Ticket;

class TicketController
{
    private Ticket $ticketModel;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->ticketModel = new Ticket($pdo);
    }

    public function guardarTicket(): void
    {
        $titulo = trim($_POST['titulo'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $estado = trim($_POST['estado'] ?? 'Pendiente');
        $prioridad = trim($_POST['prioridad'] ?? 'Media');
        $creadorId = intval($_POST['creador_id'] ?? 0);
        $asignadoId = $_POST['asignado_id'] !== '' ? intval($_POST['asignado_id']) : null;
        $compraId = $_POST['compra_id'] !== '' ? intval($_POST['compra_id']) : null;

        $resultado = $this->ticketModel->insertarTicket($titulo, $descripcion, $estado, $prioridad, $creadorId, $asignadoId, $compraId);

        header('Content-Type: application/json');
        echo json_encode([
            'success' => (bool)$resultado,
            'message' => $resultado ? 'Ticket registrado correctamente.' : 'Error al registrar el ticket.'
        ]);
    }

    public function obtenerTickets(): void
    {
        $tickets = $this->ticketModel->obtenerTickets();
        header('Content-Type: application/json');
        echo json_encode($tickets);
    }

    public function obtenerTicketPorId(): void
    {
        $id = $_GET['id'] ?? '';
        $ticket = $this->ticketModel->obtenerTicketPorId($id);
        header('Content-Type: application/json');
        echo json_encode($ticket);
    }
}
