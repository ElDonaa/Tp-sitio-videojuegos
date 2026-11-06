<?php
require_once '../config/conexion.php';

// Consulta segura para obtener los juegos de la base de datos
$stmt = $pdo->query("SELECT * FROM juegos ORDER BY id_juego DESC");
$registros = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Videojuegos - GameZone</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4 bg-dark text-light">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Administración de Videojuegos</h2>
        <a href="../index.php" class="btn btn-outline-light">Volver al Sitio</a>
    </div>

    <a href="crear.php" class="btn btn-primary mb-3">Agregar Nuevo Juego</a>

    <table class="table table-dark table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Calificación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['id_juego']) ?></td>
                <td><?= htmlspecialchars($item['titulo']) ?></td>
                <td><?= htmlspecialchars($item['calificacion']) ?></td>
                <td>
                    <a href="editar.php?id=<?= $item['id_juego'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="eliminar.php?id=<?= $item['id_juego'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Confirma eliminar este registro?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>