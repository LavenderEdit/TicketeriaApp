<?php
header('Content-Type: application/json');

include_once __DIR__ . "/../conexion/conexion.php";

if (!isset($_FILES['image'])) {
    echo json_encode(['success' => false, 'message' => 'No se recibió ningún archivo.']);
    exit;
}

$file = $_FILES['image'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => 'Error al subir el archivo.']);
    exit;
}

$imgData = file_get_contents($file['tmp_name']);
if ($imgData === false) {
    echo json_encode(['success' => false, 'message' => 'Error al leer el archivo.']);
    exit;
}

$stmt = $con->prepare("INSERT INTO datos_personales (foto) VALUES (?)");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Error en la preparación: ' . $con->error]);
    exit;
}

$null = NULL;
$stmt->bind_param("b", $null);
$stmt->send_long_data(0, $imgData);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Archivo subido a la base de datos.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al ejecutar la inserción: ' . $stmt->error]);
}

$stmt->close();
$con->close();

/*
    Nota 1: Ya esta hecho? Ya esta hecho!!?? NO MI ESTIMADO COMPAÑERO TE LO HE AVANZADO UN POQUITO
    Nota 2: Practicamente lo avanzamos en un boceto de prueba aun falta configurar ciertas cosas pero en general funciona
    Nota 3: Aconsejo entender el codigo de primeras para luego  empezar a modificarlo
    Nota 4: El codigo funciona para subir data binaria de una imagen a la db
*/