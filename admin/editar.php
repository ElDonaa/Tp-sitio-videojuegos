<?php
require_once '../config/conexion.php';

$id =$_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

// Obtener el registro actual de manera segura con consulta preparada
$stmt =$pdo->prepare("SELECT * FROM juegos WHERE id_juego = :id");
$stmt->execute([':id' =>$id]);
$juego =$stmt->fetch();

if (!$juego) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo =$_POST['titulo'] ?? '';
    $calificacion =$_POST['calificacion'] ?? 0;
    $id_categoria =$_POST['id_categoria'] ?? 1;

    if (!empty($titulo)) {
        // Consulta Preparada de Actualización (Anti SQL Injection)
        $sql = "UPDATE juegos SET titulo = :titulo, calificacion = :calificacion, id_categoria = :id_categoria WHERE id_juego = :id";
        $stmt =$pdo->prepare($sql);$stmt->execute([
            ':titulo' => $titulo,
            ':calificacion