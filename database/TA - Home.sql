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

-- Inserción de datos de ejemplo en TipoUsuario
INSERT INTO TipoUsuario (tipo_primario, tipo_secundario, descripcion)
VALUES 
('Empresa', 'proveedor', 'Empresa que provee servicios o productos.'),
('Empresa', 'cliente', 'Empresa que utiliza servicios o productos.'),
('Administrador', 'general', 'Administrador con funciones generales del sistema.'),
('Administrador', 'cliente', 'Administrador orientado a clientes.'),
('Cliente', 'técnico', 'Técnico enfocado en mantenimiento.'),
('Cliente', 'comprador', 'Cliente que realiza compras.');

-------------------------------------------------------
-- Tabla Usuario: unifica Empresa, Administrador y Técnico.
-------------------------------------------------------
CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100) UNIQUE NOT NULL,
    login VARCHAR(50) UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
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
    foto BLOB, 
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
