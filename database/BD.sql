-- Crear la base de datos y seleccionarla
CREATE DATABASE IF NOT EXISTS TicketingSystemDB;
USE TicketingSystemDB;

-------------------------------------------------------
-- Tabla TipoUsuario: clasificación de cada usuario.
-------------------------------------------------------
CREATE TABLE TipoUsuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_primario VARCHAR(50) NOT NULL,    -- Ej.: Empresa, Administrador, Técnico
    tipo_secundario VARCHAR(50) NOT NULL,    -- Ej.: proveedor/cliente, general/cliente, mantenimiento/cliente
    descripcion TEXT
);

-------------------------------------------------------
-- Tabla Usuario: unifica Empresa, Administrador y Técnico.
-------------------------------------------------------
CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100) UNIQUE NOT NULL,
    fecha_logeo DATETIME,
    contrasena VARCHAR(255) NOT NULL,
    foto LONGBLOB,
    tipo_usuario_id INT,
    FOREIGN KEY (tipo_usuario_id) REFERENCES TipoUsuario(id) ON DELETE SET NULL
);

-------------------------------------------------------
-- Tabla Compra: registra las compras realizadas por usuarios (ej. técnicos).
-------------------------------------------------------
CREATE TABLE Compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tecnico_id INT NOT NULL,  -- Hace referencia al usuario que actúa como técnico
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (tecnico_id) REFERENCES Usuario(id) ON DELETE CASCADE
);

-------------------------------------------------------
-- Tabla CompraDetalle: detalla los componentes adquiridos en cada compra.
-------------------------------------------------------
CREATE TABLE CompraDetalle (
    id INT AUTO_INCREMENT PRIMARY KEY,
    compra_id INT NOT NULL,
    componente VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (compra_id) REFERENCES Compra(id) ON DELETE CASCADE
);

-------------------------------------------------------
-- Tabla Ticket: registra los tickets del sistema.
-------------------------------------------------------
CREATE TABLE Ticket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,  -- Se amplía para permitir títulos más descriptivos
    descripcion TEXT,
    estado ENUM('Nuevo','Asignado','Pre Atencion','En Proceso','Culminado') DEFAULT 'Nuevo',
    prioridad ENUM('Alta','Media','Baja') DEFAULT 'Media',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    creador_id INT NOT NULL,      -- Usuario que crea el ticket (cliente, técnico, etc.)
    asignado_id INT,              -- Usuario asignado para atender el ticket (idealmente un técnico)
    compra_id INT,                -- Opcional, si el ticket se genera a partir de una compra
    FOREIGN KEY (creador_id) REFERENCES Usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (asignado_id) REFERENCES Usuario(id) ON DELETE SET NULL,
    FOREIGN KEY (compra_id) REFERENCES Compra(id) ON DELETE SET NULL
);

-- Inserción de datos de ejemplo en TipoUsuario
INSERT INTO TipoUsuario (tipo_primario, tipo_secundario, descripcion)
VALUES 
('Empresa', 'proveedor', 'Empresa que provee servicios o productos.'),
('Empresa', 'cliente', 'Empresa que utiliza servicios o productos.'),
('Administrador', 'general', 'Administrador con funciones generales del sistema.'),
('Administrador', 'cliente', 'Administrador orientado a clientes.'),
('Cliente', 'técnico', 'Técnico enfocado en mantenimiento.'),
('Cliente', 'comprador', 'Cliente que realiza compras.');

DELIMITER //

CREATE PROCEDURE sp_InsertTipoUsuario(
    IN p_tipo_primario VARCHAR(50),
    IN p_tipo_secundario VARCHAR(50),
    IN p_descripcion TEXT
)
BEGIN
    INSERT INTO TipoUsuario (tipo_primario, tipo_secundario, descripcion)
    VALUES (p_tipo_primario, p_tipo_secundario, p_descripcion);
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE sp_InsertUsuario(
    IN p_nombre VARCHAR(100),
    IN p_telefono VARCHAR(20),
    IN p_email VARCHAR(100),
    IN p_fecha_logeo DATETIME,
    IN p_contrasena VARCHAR(255),
    IN p_foto LONGBLOB,
    IN p_tipo_usuario_id INT
)
BEGIN
    INSERT INTO Usuario (nombre, telefono, email, fecha_logeo, contrasena, foto, tipo_usuario_id)
    VALUES (p_nombre, p_telefono, p_email, p_fecha_logeo, p_contrasena, p_foto, p_tipo_usuario_id);
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE sp_InsertCompra(
    IN p_tecnico_id INT,
    IN p_total DECIMAL(10,2)
)
BEGIN
    INSERT INTO Compra (tecnico_id, total)
    VALUES (p_tecnico_id, p_total);
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE sp_InsertCompraDetalle(
    IN p_compra_id INT,
    IN p_componente VARCHAR(100),
    IN p_cantidad INT,
    IN p_precio DECIMAL(10,2)
)
BEGIN
    INSERT INTO CompraDetalle (compra_id, componente, cantidad, precio)
    VALUES (p_compra_id, p_componente, p_cantidad, p_precio);
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE sp_InsertTicket(
    IN p_titulo VARCHAR(100),
    IN p_descripcion TEXT,
    IN p_estado VARCHAR(20),
    IN p_prioridad VARCHAR(20),
    IN p_creador_id INT,
    IN p_asignado_id INT,  -- Pasa NULL si no aplica
    IN p_compra_id INT     -- Pasa NULL si no aplica
)
BEGIN
    INSERT INTO Ticket (titulo, descripcion, estado, prioridad, creador_id, asignado_id, compra_id)
    VALUES (p_titulo, p_descripcion, p_estado, p_prioridad, p_creador_id, p_asignado_id, p_compra_id);
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE ObtenerClientesTecnicos()
BEGIN
    SELECT 
        u.nombre, 
        u.telefono, 
        u.email, 
        CONCAT(tu.tipo_primario, ' - ', tu.tipo_secundario) AS tipo_usuario
    FROM Usuario u
    INNER JOIN TipoUsuario tu ON u.tipo_usuario_id = tu.id
    WHERE tu.tipo_primario = 'Cliente' AND tu.tipo_secundario = 'técnico';
END //

DELIMITER ;

-- Usuarios técnicos (5)
CALL sp_InsertUsuario('Carlos Méndez', '555-1001', 'carlosm@example.com', NOW(), 'hash123', NULL, 5);
CALL sp_InsertUsuario('Laura González', '555-1002', 'laurag@example.com', NOW(), 'hash124', NULL, 5);
CALL sp_InsertUsuario('Pedro Ramírez', '555-1003', 'pedror@example.com', NOW(), 'hash125', NULL, 5);
CALL sp_InsertUsuario('Ana Sánchez', '555-1004', 'anasan@example.com', NOW(), 'hash126', NULL, 5);
CALL sp_InsertUsuario('Miguel Díaz', '555-1005', 'migueld@example.com', NOW(), 'hash127', NULL, 5);
CALL sp_InsertUsuario('Sofía Castro', '555-2001', 'sofiac@example.com', NOW(), 'hash201', NULL, 5);
CALL sp_InsertUsuario('Ricardo Mora', '555-2002', 'ricardom@example.com', NOW(), 'hash202', NULL, 5);
CALL sp_InsertUsuario('Elena Ruiz', '555-2003', 'elenar@example.com', NOW(), 'hash203', NULL, 5);

-- Usuario cliente comprador
CALL sp_InsertUsuario('Juan Pérez', '555-3001', 'juanp@example.com', NOW(), 'hash301', NULL, 6);  -- tipo_usuario_id=6 (cliente comprador)
CALL sp_InsertUsuario('María González', '555-3002', 'mariag@example.com', NOW(), 'hash302', NULL, 6);
CALL sp_InsertUsuario('Carlos Rojas', '555-3003', 'carlosr@example.com', NOW(), 'hash303', NULL, 6);
CALL sp_InsertUsuario('Ana Martínez', '555-3004', 'anam@example.com', NOW(), 'hash304', NULL, 6);
CALL sp_InsertUsuario('Luis Herrera', '555-3005', 'luish@example.com', NOW(), 'hash305', NULL, 6);
CALL sp_InsertUsuario('Sofía Vargas', '555-3006', 'sofiav@example.com', NOW(), 'hash306', NULL, 6);
CALL sp_InsertUsuario('Pedro Castro', '555-3007', 'pedroc@example.com', NOW(), 'hash307', NULL, 6);
CALL sp_InsertUsuario('Elena Morales', '555-3008', 'elenam@example.com', NOW(), 'hash308', NULL, 6);
CALL sp_InsertUsuario('Jorge Nuñez', '555-3009', 'jorgen@example.com', NOW(), 'hash309', NULL, 6);
CALL sp_InsertUsuario('Diana Silva', '555-3010', 'dianas@example.com', NOW(), 'hash310', NULL, 6);

-- Compras realizadas por técnicos (IDs 1-5)
CALL sp_InsertCompra(1, 350.00);
CALL sp_InsertCompra(2, 420.50);
CALL sp_InsertCompra(3, 175.25);
CALL sp_InsertCompra(1, 89.99);
CALL sp_InsertCompra(4, 560.75);
CALL sp_InsertCompra(5, 320.00);
CALL sp_InsertCompra(2, 210.30);
CALL sp_InsertCompra(3, 430.00);
CALL sp_InsertCompra(4, 150.00);
CALL sp_InsertCompra(5, 275.50);

-- Detalles para cada compra
CALL sp_InsertCompraDetalle(1, 'Tarjeta Madre', 1, 250.00);
CALL sp_InsertCompraDetalle(1, 'Memoria RAM 8GB', 2, 50.00);
CALL sp_InsertCompraDetalle(2, 'Disco SSD 500GB', 1, 120.50);
CALL sp_InsertCompraDetalle(2, 'Procesador i5', 1, 300.00);
CALL sp_InsertCompraDetalle(3, 'Fuente de Poder', 1, 75.25);
CALL sp_InsertCompraDetalle(3, 'Ventilador CPU', 2, 50.00);
CALL sp_InsertCompraDetalle(4, 'Teclado Mecánico', 1, 89.99);
CALL sp_InsertCompraDetalle(5, 'Monitor 24"', 1, 300.00);
CALL sp_InsertCompraDetalle(5, 'Cable HDMI', 3, 20.25);
CALL sp_InsertCompraDetalle(5, 'Adaptador USB-C', 2, 40.50);

-- Distribuyendo tickets entre los 10 clientes (IDs 9-18) y 8 técnicos (IDs 1-8)
CALL sp_InsertTicket('Equipo no enciende', 'El computador no da señal de vida al presionar el botón de encendido', 'Nuevo', 'Alta', 9, 1, 1);
CALL sp_InsertTicket('Pantalla azul', 'Windows muestra pantalla azul al iniciar ciertos programas', 'Asignado', 'Media', 10, 2, NULL);
CALL sp_InsertTicket('Rendimiento lento', 'El equipo tarda mucho en abrir aplicaciones básicas', 'En Proceso', 'Baja', 11, 3, 3);
CALL sp_InsertTicket('Problema de conexión', 'No puedo conectarme a la red WiFi de la oficina', 'Nuevo', 'Alta', 12, 4, NULL);
CALL sp_InsertTicket('Impresora no funciona', 'La impresora muestra error de papel atascado pero no hay papel', 'Asignado', 'Media', 13, 5, 5);
CALL sp_InsertTicket('Software no se instala', 'Error al instalar el paquete de diseño gráfico', 'Pre Atencion', 'Alta', 14, 1, NULL);
CALL sp_InsertTicket('Correo electrónico bloqueado', 'No puedo acceder a mi cuenta de correo corporativo', 'Nuevo', 'Alta', 15, 2, NULL);
CALL sp_InsertTicket('Actualización fallida', 'La actualización de Windows se interrumpió y ahora el sistema no arranca', 'En Proceso', 'Alta', 16, 3, 8);
CALL sp_InsertTicket('Periféricos no responden', 'Teclado y mouse dejan de funcionar aleatoriamente', 'Asignado', 'Media', 17, 4, NULL);
CALL sp_InsertTicket('Solicitud de equipo nuevo', 'Necesito configuración para un nuevo equipo que recibí', 'Culminado', 'Baja', 18, 5, 10);

-- Tickets adicionales para mayor diversidad
CALL sp_InsertTicket('Monitor con líneas', 'Aparecen líneas verticales en la pantalla del monitor', 'Nuevo', 'Media', 9, 6, NULL);
CALL sp_InsertTicket('Sin acceso a impresora', 'No puedo imprimir aunque la impresora está encendida', 'Asignado', 'Baja', 10, 7, NULL);
CALL sp_InsertTicket('Teclado mojado', 'Derramé café sobre el teclado y ahora no funcionan algunas teclas', 'En Proceso', 'Alta', 11, 8, NULL);
CALL sp_InsertTicket('Problema con software contable', 'El sistema contable no genera los reportes mensuales', 'Nuevo', 'Alta', 12, 1, NULL);
CALL sp_InsertTicket('Lentitud en red', 'La conexión de red es extremadamente lenta en las mañanas', 'Asignado', 'Media', 13, 2, NULL);

-- Verificación de relaciones
SELECT 
    t.id AS ticket_id,
    t.titulo,
    c.nombre AS cliente,
    tec.nombre AS tecnico_asignado,
    t.estado
FROM Ticket t
JOIN Usuario c ON t.creador_id = c.id AND c.tipo_usuario_id = 6
JOIN Usuario tec ON t.asignado_id = tec.id AND tec.tipo_usuario_id = 5
ORDER BY t.id;

CALL ObtenerClientesTecnicos();