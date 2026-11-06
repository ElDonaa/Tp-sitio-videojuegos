<?php
require_once '../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $calificacion = $_POST['calificacion'] ?? 0;
    $id_categoria = $_POST['id_categoria'] ?? 1;

    if (!empty($titulo)) {
        // Consulta Preparada (Anti SQL Injection)
        $sql = "INSERT INTO juegos (titulo, calificacion, id_categoria) VALUES (:titulo, :calificacion, :id_categoria)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':calificacion' => $calificacion,
            ':id_categoria' => $id_categoria
        ]);
        header('Location: index.php?status=created');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Videojuego - GameZone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4 bg-dark text-light">
    <h2 class="mb-4">Agregar Nuevo Videojuego</h2>
    
    <form action="crear.php" method="POST" class="card p-4 bg-secondary text-light">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Juego</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" step="0.1" class="form-control" id="calificacion" name="calificacion" required>
        </div>
        <div class="mb-3">
            <label for="id_categoria" class="form-label">ID de Categoría</label>
            <input type="number" class="form-control" id="id_categoria" name="id_categoria" value="1" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Videojuego</button>
        <a href="index.php" class="btn btn-link text-light mt-2">Cancelar</a>
    </form>
</body>
</html>