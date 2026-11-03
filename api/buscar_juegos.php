<?php
header('Content-Type: application/json; charset=utf-8');

// Incluimos la conexión a la base de datos (ajusta la ruta según tu estructura)
require_once '../config/conexion.php'; 


$busqueda = isset($_GET['q']) ? trim($_GET['q']) : '';

try {
    if (!empty($busqueda)) {
        // Ajusta 'juegos', 'nombre' o 'titulo' según los campos reales de tu base de datos
       $stmt = $pdo->prepare("SELECT id_juego AS id, titulo AS nombre FROM juegos WHERE titulo LIKE :query");
        $stmt->execute([':query' => "%{$busqueda}%"]);
    } else {
        $stmt = $pdo->query("SELECT id_juego AS id, titulo AS nombre FROM juegos LIMIT 10");
    }

    $juegos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    http_response_code(200);
    echo json_encode([
        'status' => 'success',
        'data' => $juegos
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Error al consultar la base de datos'
    ]);
}