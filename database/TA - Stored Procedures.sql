USE ticketingsystemdb;


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

CREATE PROCEDURE sp_Obtener_usuario_clientes_tecnicos()
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
