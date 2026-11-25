<?php
require_once __DIR__ . '/auth_admin.php';
require_once __DIR__ . '/../config/conexion.php';

$id = $_GET['id'] ?? null;

if ($id) {
    // Consulta Preparada para Eliminar (Anti SQL Injection)
    $sql = "DELETE FROM juegos WHERE id_juego = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
}

header('Location: index.php?status=deleted');
exit;
?>