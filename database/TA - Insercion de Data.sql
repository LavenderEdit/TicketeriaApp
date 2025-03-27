USE TicketingSystemDB;

-- Inserción de datos de ejemplo en TipoUsuario
INSERT INTO TipoUsuario (tipo_primario, tipo_secundario, descripcion)
VALUES 
('Empresa', 'proveedor', 'Empresa que provee servicios o productos.'),
('Empresa', 'cliente', 'Empresa que utiliza servicios o productos.'),
('Administrador', 'general', 'Administrador con funciones generales del sistema.'),
('Administrador', 'cliente', 'Administrador orientado a clientes.'),
('Cliente', 'técnico', 'Técnico enfocado en mantenimiento.'),
('Cliente', 'comprador', 'Cliente que realiza compras.');