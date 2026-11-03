<?php
// Aseguramos que la sesión esté iniciada para poder validar el estado del usuario
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Nota: Si este archivo se encuentra dentro de includes/, la ruta relativa al header ya no es necesaria aquí.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Videojuegos - Inicio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- CSS Personalizado -->
     <link rel="stylesheet" href="/tp-framework-videojuegos/Tp-sitio-videojuegos/css/styles.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark sticky-top custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php?accion=inicio">
                <i class="fa-solid fa-gamepad text-primary"></i> GAMEZONE
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-menu mx-auto mb-2 mb-lg-0">
                    <li><a href="index.php?accion=inicio" class="nav-link-custom">Inicio</a></li>
                    <li><a href="index.php?accion=juegos" class="nav-link-custom">Juegos</a></li>
                    <li><a href="index.php?accion=plataformas" class="nav-link-custom">Plataformas</a></li>
                    <li><a href="index.php?accion=noticias" class="nav-link-custom">Noticias</a></li>
                    <li><a href="index.php?accion=analisis" class="nav-link-custom">Análisis</a></li>
                    <li><a href="index.php?accion=guias" class="nav-link-custom">Guías</a></li>
                    <li><a href="index.php?accion=contacto" class="nav-link-custom">Contacto</a></li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="index.php?accion=buscar" class="btn text-white p-0" aria-label="Buscar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    
                    <?php if (isset($_SESSION['usuario_id'])): ?>
                        <!-- Si el usuario YA INICIÓ SESIÓN -->
                        <a href="index.php?accion=perfil" class="btn btn-outline-light btn-sm d-flex align-items-center gap-1">
                            <i class="fa-regular fa-user"></i> Mi Perfil
                        </a>
                        <a href="index.php?accion=logout" class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                            <i class="fa-solid fa-right-from-bracket"></i> Salir
                        </a>
                    <?php else: ?>
                        <!-- Si el usuario NO HA INICIADO SESIÓN: Botón directo -->
                        <a href="index.php?accion=login" class="btn btn-primary-custom d-flex align-items-center gap-2">
                            <i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
</body>
</html>