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
    <link rel="stylesheet" href="/Tp-sitio-videojuegos/css/styles.css">
</head>
<body>
        <header class="navbar navbar-expand-lg navbar-dark sticky-top custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <i class="fa-solid fa-gamepad text-primary"></i> GAMEZONE
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-menu mx-auto mb-2 mb-lg-0">
                <li><a href="index.php" class="nav-link-custom">Inicio</a></li>
                <li><a href="juegos.php" class="nav-link-custom">Juegos</a></li>
                <li><a href="plataformas.php" class="nav-link-custom">Plataformas</a></li>
                <li><a href="noticias.php" class="nav-link-custom">Noticias</a></li>
                <li><a href="analisis.php" class="nav-link-custom">Análisis</a></li>
                <li><a href="guias.php" class="nav-link-custom">Guías</a></li>
                <li><a href="contacto.php" class="nav-link-custom">Contacto</a></li>
            </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="buscar.php" class="btn text-white p-0" aria-label="Buscar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    
<div class="btn-group">
   
    <a href="perfil.php" class="btn btn-profile text-white text-decoration-none d-flex align-items-center">
        <i class="fa-regular fa-user me-1"></i> 
    </a>

   
    <button type="button" 
            class="btn btn-profile text-white dropdown-toggle dropdown-toggle-split ps-1 pe-2" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
        <span class="visually-hidden">Abrir opciones</span>
    </button>

    
    <ul class="dropdown-menu dropdown-menu-end bg-dark border border-secondary border-opacity-25 shadow-lg mt-2">
        <li>
            <a class="dropdown-item text-white d-flex align-items-center gap-2 py-2" href="perfil.php">
                <i class="fa-regular fa-id-card text-primary"></i> Ver Mi Perfil
            </a>
        </li>
        <li><hr class="dropdown-divider border-secondary border-opacity-25"></li>
        <li>
    <a class="dropdown-item text-white d-flex align-items-center gap-2 py-2" href="login.php">
        <i class="fa-solid fa-right-to-bracket text-primary"></i> Iniciar Sesión
    </a>
</li>
        <li>
    <a class="dropdown-item text-white d-flex align-items-center gap-2 py-2" href="registro.php">
        <i class="fa-solid fa-user-plus text-primary"></i> Crear Cuenta
    </a>
</li>
    </ul>
</div>
                </div>
            </div>
        </div>
    </header>
</body>