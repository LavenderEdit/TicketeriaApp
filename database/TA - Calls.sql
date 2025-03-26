-- Insertar un TipoUsuario
CALL sp_InsertTipoUsuario('Cliente', 'técnico', 'Técnico especializado en mantenimiento');

-- Insertar un Usuario
CALL sp_InsertUsuario('Juan Pérez', '555-1234', 'juanp@example.com', NOW(), 'hashed_password', NULL, 1);

-- Insertar una Compra (suponiendo que el técnico tiene id=2)
CALL sp_InsertCompra(2, 250.75);

-- Insertar un detalle de Compra (suponiendo que la compra insertada tiene id=1)
CALL sp_InsertCompraDetalle(1, 'Componente A', 2, 99.99);

-- Insertar un Ticket (por ejemplo, creado por un cliente con id=3 y asignado a un técnico con id=2)
CALL sp_InsertTicket('Problema en el equipo', 'La máquina no enciende correctamente', 'Nuevo', 'Alta', 3, 2, 1);

CALL ObtenerClientesTecnicos();