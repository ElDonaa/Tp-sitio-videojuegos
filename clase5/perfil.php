<?php
$titulo_pagina = "perfil - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- CONTENIDO PRINCIPAL DEL PERFIL -->
    <main class="py-4">
        <div class="container">

            <!-- BANNER DE PERFIL / PORTADA -->
            <div class="bg-card border border-secondary border-opacity-25 rounded-4 overflow-hidden mb-4 position-relative">
                <!-- Imagen de Fondo del Banner -->
                <div class="position-relative" style="height: 220px; background: linear-gradient(180deg, rgba(15, 23, 42, 0.2) 0%, rgba(15, 23, 42, 0.95) 100%), url('img/banner-gamer.jpg') center/cover no-repeat;">
                </div>

                <!-- Info del Usuario sobre el Banner -->
                <div class="p-4 pt-0 position-relative mt-n5">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
                        
                        <!-- Avatar e Identificación -->
                        <div class="d-flex align-items-end gap-3">
                            <div class="position-relative">
                                <img src="img/avatar.png" class="rounded-circle border border-3 border-primary" style="width: 100px; height: 100px; object-fit: cover;" alt="Avatar GamerPro">
                                <span class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center border border-2 border-dark" style="width: 28px; height: 28px; font-size: 11px;">
                                    <i class="fa-solid fa-pencil"></i>
                                </span>
                            </div>
                            <div class="mb-1">
                                <div class="d-flex align-items-center gap-2">
                                    <h1 class="h3 fw-bold text-white mb-0">GamerPro</h1>
                                    <span class="badge bg-primary bg-opacity-25 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1" style="font-size: 10px;">Nivel 42</span>
                                </div>
                                <div class="d-flex align-items-center gap-3 text-secondary small mt-1" style="font-size: 12px;">
                                    <span>@gamerpro_original</span>
                                    <span>•</span>
                                    <span>Miembro desde Marzo 2024</span>
                                </div>
                                <div class="d-flex gap-2 mt-3">
                                    <button class="btn btn-primary btn-sm px-3 rounded-3 font-semibold" style="font-size: 12px;">
                                        <i class="fa-solid fa-pencil me-1"></i> Editar Perfil
                                    </button>
                                    <button class="btn btn-outline-light btn-sm px-3 rounded-3 font-semibold" style="font-size: 12px;">
                                        <i class="fa-solid fa-gear me-1"></i> Configuración
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Métricas del Banner (Seguidores / Siguiendo / Logros) -->
                        <div class="d-flex gap-4 text-center pb-1">
                            <div>
                                <span class="fs-5 fw-bold text-white d-block">12k</span>
                                <span class="text-uppercase text-secondary" style="font-size: 10px; letter-spacing: 0.5px;">SEGUIDORES</span>
                            </div>
                            <div>
                                <span class="fs-5 fw-bold text-white d-block">850</span>
                                <span class="text-uppercase text-secondary" style="font-size: 10px; letter-spacing: 0.5px;">SIGUIENDO</span>
                            </div>
                            <div>
                                <span class="fs-5 fw-bold text-white d-block">2.4k</span>
                                <span class="text-uppercase text-secondary" style="font-size: 10px; letter-spacing: 0.5px;">LOGROS</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- CUERPO DEL PERFIL: MENÚ LATERAL + PANEL PRINCIPAL -->
            <div class="row g-4">
                
                <!-- NAVEGACIÓN LATERAL DE PERFIL -->
                <aside class="col-lg-3">
                    <div class="d-flex flex-column gap-1">
                        <a href="#" class="btn btn-primary text-start px-3 py-2 rounded-3 d-flex align-items-center gap-2 font-semibold" style="font-size: 13px;">
                            <i class="fa-regular fa-user"></i> Mi Perfil
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-solid fa-gamepad"></i> Mis Juegos
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-regular fa-star"></i> Favoritos
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-regular fa-comment"></i> Mensajes
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-regular fa-bell"></i> Notificaciones
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-solid fa-shield-halved"></i> Seguridad
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-regular fa-credit-card"></i> Suscripciones
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-secondary d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-solid fa-gear"></i> Configuración
                        </a>
                        <a href="#" class="btn btn-dark text-start px-3 py-2 rounded-3 text-danger d-flex align-items-center gap-2 mt-2" style="font-size: 13px;">
                            <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión
                        </a>
                    </div>
                </aside>

                <!-- DETALLES DEL PERFIL -->
                <section class="col-lg-9">
                    
                    <!-- 4 TARJETAS DE ESTADÍSTICAS DEL GAMER -->
                    <div class="row row-cols-2 row-cols-md-4 g-3 mb-4">
                        <div class="col">
                            <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-3 text-center">
                                <div class="text-primary mb-2"><i class="fa-solid fa-gamepad fs-4"></i></div>
                                <h3 class="h4 fw-bold text-white mb-0">124</h3>
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 9px; letter-spacing: 0.5px;">JUEGOS JUGADOS</span>
                                <small class="text-secondary" style="font-size: 10px;">+12 este mes</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-3 text-center">
                                <div class="text-primary mb-2"><i class="fa-regular fa-clock fs-4"></i></div>
                                <h3 class="h4 fw-bold text-white mb-0">3,250</h3>
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 9px; letter-spacing: 0.5px;">HORAS TOTALES</span>
                                <small class="text-secondary" style="font-size: 10px;">Promedio 4h/día</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-3 text-center">
                                <div class="text-primary mb-2"><i class="fa-solid fa-trophy fs-4"></i></div>
                                <h3 class="h4 fw-bold text-white mb-0">1420</h3>
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 9px; letter-spacing: 0.5px;">LOGROS OBTENIDOS</span>
                                <small class="text-secondary" style="font-size: 10px;">85% Completado</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-3 text-center">
                                <div class="text-primary mb-2"><i class="fa-solid fa-bullseye fs-4"></i></div>
                                <h3 class="h4 fw-bold text-white mb-0">Elite</h3>
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 9px; letter-spacing: 0.5px;">RANGO DE HABILIDAD</span>
                                <small class="text-secondary" style="font-size: 10px;">Top 5% Global</small>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑAS / TABS -->
                    <div class="bg-card border border-secondary border-opacity-25 rounded-pill p-1 mb-4 d-inline-flex gap-1" style="font-size: 12px;">
                        <button class="btn btn-primary rounded-pill px-4 py-1 fw-semibold">Datos Personales</button>
                        <button class="btn btn-dark text-secondary rounded-pill px-4 py-1 border-0">Actividad Reciente</button>
                        <button class="btn btn-dark text-secondary rounded-pill px-4 py-1 border-0">Amigos</button>
                    </div>

                    <!-- INFORMACIÓN DE CUENTA -->
                    <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-4">
                        <h2 class="h5 fw-bold text-white mb-1">Información de Cuenta</h2>
                        <p class="text-secondary mb-4" style="font-size: 12px;">Gestiona tus detalles personales y preferencias de privacidad.</p>

                        <div class="row g-4 mb-4">
                            <div class="col-md-6 border-bottom border-secondary border-opacity-25 pb-3">
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px; letter-spacing: 0.5px;">NOMBRE COMPLETO</span>
                                <span class="fw-bold text-white" style="font-size: 14px;">Juan Pérez García</span>
                            </div>
                            <div class="col-md-6 border-bottom border-secondary border-opacity-25 pb-3">
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px; letter-spacing: 0.5px;">CORREO ELECTRÓNICO</span>
                                <span class="fw-bold text-white" style="font-size: 14px;">juan.perez@gamezone.com</span>
                            </div>
                            <div class="col-md-6 border-bottom border-secondary border-opacity-25 pb-3">
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px; letter-spacing: 0.5px;">UBICACIÓN</span>
                                <span class="fw-bold text-white" style="font-size: 14px;">Ciudad de México, MX</span>
                            </div>
                            <div class="col-md-6 border-bottom border-secondary border-opacity-25 pb-3">
                                <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px; letter-spacing: 0.5px;">PLATAFORMA PRINCIPAL</span>
                                <span class="fw-bold text-white" style="font-size: 14px;">PC / PlayStation 5</span>
                            </div>
                        </div>

                        <!-- BARRA DE PROGRESO DE NIVEL -->
                        <div class="pt-2">
                            <span class="text-uppercase text-primary fw-bold d-block mb-1" style="font-size: 11px; letter-spacing: 0.5px;">PROGRESO DE NIVEL</span>
                            <div class="d-flex justify-content-between text-secondary mb-1" style="font-size: 11px;">
                                <span>Siguiente nivel: 43</span>
                                <span class="text-primary font-monospace">2,450 / 3,000 XP</span>
                            </div>
                            <div class="progress bg-dark border border-secondary border-opacity-25" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </div>
    </main>

    
</body>
</html>
<?php
require_once 'includes/footer.php';
?>