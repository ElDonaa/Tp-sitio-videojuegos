<?php
$titulo_pagina = "plataformas - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- MAIN CONTENT AREA -->
    <main class="main-content">

        <!-- SECCIÓN 1: HERO DE PLATAFORMAS -->
        <section class="container py-5">
            <div class="row align-items-center g-4">
                
                <!-- Columna Izquierda: Presentación -->
                <div class="col-lg-7">
                    <span class="badge bg-primary bg-opacity-20 text-primary-custom px-3 py-2 rounded-pill fw-semibold mb-3">ECOSISTEMAS GAMING</span>
                    <h1 class="display-4 fw-black text-white mb-3">Por <span class="text-primary-custom fst-italic">Plataforma</span></h1>
                    <p class="text-secondary-custom fs-5 pe-lg-5 mb-4">
                        Explora los catálogos más completos y las últimas novedades optimizadas para tu hardware favorito. Desde la potencia bruta del PC hasta la portabilidad mágica de Nintendo.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#juegos-plataforma" class="btn btn-primary px-4 py-2 fw-semibold">Explorar Catálogo <i class="fa-solid fa-chevron-right ms-1 small"></i></a>
                        <button class="btn btn-outline-light px-4 py-2 fw-semibold">Comparar Hardware</button>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjetas Selectoras de Plataformas -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-3">
                        
                        <!-- Tarjeta PC (Activa) -->
                        <div class="platform-selector-card p-3 rounded bg-primary bg-opacity-10 border border-primary d-flex align-items-center gap-3 cursor-pointer">
                            <div class="platform-icon-box bg-primary text-white rounded p-3 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-desktop fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold text-white mb-1">PC MASTER RACE</h6>
                                <p class="text-secondary-custom extra-small mb-0">Máximo rendimiento y personalización absoluta.</p>
                            </div>
                            <span class="badge bg-primary rounded-circle p-1"></span>
                        </div>

                        <!-- Tarjeta PlayStation 5 -->
                        <div class="platform-selector-card p-3 rounded bg-dark-custom border border-dark-custom d-flex align-items-center gap-3 cursor-pointer">
                            <div class="platform-icon-box bg-dark text-white rounded p-3 d-flex align-items-center justify-content-center">
                                <i class="fa-brands fa-playstation fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold text-white mb-1">PLAYSTATION 5</h6>
                                <p class="text-secondary-custom extra-small mb-0">Exclusivos cinematográficos e inmersión.</p>
                            </div>
                        </div>

                        <!-- Tarjeta Xbox Series -->
                        <div class="platform-selector-card p-3 rounded bg-dark-custom border border-dark-custom d-flex align-items-center gap-3 cursor-pointer">
                            <div class="platform-icon-box bg-dark text-white rounded p-3 d-flex align-items-center justify-content-center">
                                <i class="fa-brands fa-xbox fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold text-white mb-1">XBOX SERIES X|S</h6>
                                <p class="text-secondary-custom extra-small mb-0">La consola más potente con Game Pass.</p>
                            </div>
                        </div>

                        <!-- Tarjeta Nintendo Switch -->
                        <div class="platform-selector-card p-3 rounded bg-dark-custom border border-dark-custom d-flex align-items-center gap-3 cursor-pointer">
                            <div class="platform-icon-box bg-dark text-white rounded p-3 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-mobile-screen-button fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fw-bold text-white mb-1">NINTENDO SWITCH</h6>
                                <p class="text-secondary-custom extra-small mb-0">Magia portátil y diversión cooperativa.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <hr class="border-secondary opacity-25 my-0">

        <!-- SECCIÓN 2: PLATAFORMA SELECCIONADA Y DETALLES -->
        <section class="container py-5">
            
            <!-- Ficha resumida de hardware -->
            <div class="p-4 rounded bg-dark-custom border border-dark-custom mb-5">
                <div class="row align-items-center g-3">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="text-primary fs-3"><i class="fa-solid fa-desktop"></i></div>
                            <div>
                                <h2 class="fw-bold text-white mb-0">PC Master Race</h2>
                                <span class="extra-small text-muted fw-mono">HARDWARE ID: GPZ-PC</span>
                            </div>
                        </div>
                        <p class="text-secondary-custom mb-3">
                            La plataforma definitiva para el gaming competitivo y la fidelidad gráfica extrema. Accede a las bibliotecas más grandes del mundo como Steam, Epic Games Store y GOG.
                        </p>
                        <div class="d-flex flex-wrap gap-4 text-secondary-custom extra-small">
                            <span><i class="fa-regular fa-clock text-primary me-1"></i> <strong>Specs Recomendadas:</strong> RTX 4080 / Ryzen 7</span>
                            <span><i class="fa-solid fa-bolt text-primary me-1"></i> <strong>Tasa de Refresco:</strong> Hasta 144Hz</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <button class="btn btn-outline-primary btn-sm px-3">
                            Ver Especificaciones <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- JUEGOS DESTACADOS EN PC -->
            <div id="juegos-plataforma">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold text-white mb-0">
                        <span class="text-primary me-2">|</span> JUEGOS DESTACADOS EN PC
                    </h4>
                    <div class="d-flex gap-3 extra-small">
                        <a href="#" class="text-white text-decoration-none fw-bold">Populares</a>
                        <a href="#" class="text-muted text-decoration-none">Novedades</a>
                        <a href="#" class="text-muted text-decoration-none">Próximamente</a>
                    </div>
                </div>

                <!-- Grilla de Tarjetas -->
                <div class="row g-4 mb-5">
                    
                    <!-- Tarjeta 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="game-card h-100 bg-dark-custom rounded p-2 border border-dark-custom">
                            <div class="card-img-wrapper rounded position-relative" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=600'); height: 260px; background-size: cover; background-position: center;">
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-2"><i class="fa-solid fa-star text-warning me-1"></i>4.8</span>
                            </div>
                            <div class="p-2 pt-3">
                                <div class="d-flex justify-content-between text-muted extra-small mb-1">
                                    <span class="text-primary-custom fw-bold">RPG / ACCIÓN</span>
                                    <span><i class="fa-solid fa-users me-1"></i>240k</span>
                                </div>
                                <h6 class="fw-bold text-white mb-3">CYBERPUNK 2077</h6>
                                <button class="btn btn-outline-secondary w-100 btn-sm text-white border-secondary border-opacity-50">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="game-card h-100 bg-dark-custom rounded p-2 border border-dark-custom">
                            <div class="card-img-wrapper rounded position-relative" style="background-image: url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=600'); height: 260px; background-size: cover; background-position: center;">
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-2"><i class="fa-solid fa-star text-warning me-1"></i>4.5</span>
                            </div>
                            <div class="p-2 pt-3">
                                <div class="d-flex justify-content-between text-muted extra-small mb-1">
                                    <span class="text-primary-custom fw-bold">SHOOTER</span>
                                    <span><i class="fa-solid fa-users me-1"></i>1.2M</span>
                                </div>
                                <h6 class="fw-bold text-white mb-3">VALORANT</h6>
                                <button class="btn btn-outline-secondary w-100 btn-sm text-white border-secondary border-opacity-50">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="game-card h-100 bg-dark-custom rounded p-2 border border-dark-custom">
                            <div class="card-img-wrapper rounded position-relative" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=600'); height: 260px; background-size: cover; background-position: center;">
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-2"><i class="fa-solid fa-star text-warning me-1"></i>4.7</span>
                            </div>
                            <div class="p-2 pt-3">
                                <div class="d-flex justify-content-between text-muted extra-small mb-1">
                                    <span class="text-primary-custom fw-bold">E-SPORTS</span>
                                    <span><i class="fa-solid fa-users me-1"></i>850k</span>
                                </div>
                                <h6 class="fw-bold text-white mb-3">CS2</h6>
                                <button class="btn btn-outline-secondary w-100 btn-sm text-white border-secondary border-opacity-50">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="game-card h-100 bg-dark-custom rounded p-2 border border-dark-custom">
                            <div class="card-img-wrapper rounded position-relative" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600'); height: 260px; background-size: cover; background-position: center;">
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-2"><i class="fa-solid fa-star text-warning me-1"></i>5.0</span>
                            </div>
                            <div class="p-2 pt-3">
                                <div class="d-flex justify-content-between text-muted extra-small mb-1">
                                    <span class="text-primary-custom fw-bold">RPG</span>
                                    <span><i class="fa-solid fa-users me-1"></i>45k</span>
                                </div>
                                <h6 class="fw-bold text-white mb-3">BALDUR'S GATE 3</h6>
                                <button class="btn btn-outline-secondary w-100 btn-sm text-white border-secondary border-opacity-50">Ver detalles</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FILA INFERIOR: ESTADO DE RED Y CAJA DE POTENCIA -->
            <div class="row g-4 align-items-stretch">
                
                <!-- Estado de la red -->
                <div class="col-lg-4">
                    <div class="p-4 rounded bg-dark-custom h-100 border border-dark-custom d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-primary-custom fw-bold extra-small text-uppercase">ESTADO DE LA RED</span>
                            
                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-secondary-custom small">Servidores</span>
                                    <span class="text-success small fw-bold"><i class="fa-solid fa-circle fs-6 me-1"></i> Online</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-secondary-custom small">Latencia Global</span>
                                    <span class="text-white small fw-bold">32ms</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-secondary-custom small">Jugadores Online</span>
                                    <span class="text-white small fw-bold">1,248,588</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-2 border-top border-secondary opacity-25">
                            <a href="#" class="extra-small text-muted text-decoration-none">Ver Reporte de Conectividad Detallado</a>
                        </div>
                    </div>
                </div>

                <!-- Caja de Suscripción Recomendada -->
                <div class="col-lg-8">
                    <div class="p-4 rounded bg-dark-custom border border-dark-custom position-relative overflow-hidden h-100 d-flex flex-column justify-content-center">
                        <span class="badge bg-primary mb-2 w-auto align-self-start">Suscripción Recomendada</span>
                        <h4 class="fw-bold text-white mb-2">Potencia tu experiencia en PC</h4>
                        <p class="text-secondary-custom small mb-4 col-md-9">
                            Suscríbete ahora para obtener acceso a juegos exclusivos, descuentos para miembros y juego en línea sin límites.
                        </p>
                        <div class="d-flex gap-3">
                            <button class="btn btn-primary px-4 btn-sm fw-semibold">Más información</button>
                            <button class="btn btn-link text-muted btn-sm text-decoration-none">Cerrar</button>
                        </div>
                        <i class="fa-solid fa-desktop position-absolute end-0 bottom-0 text-white opacity-10 me-4 mb-3" style="font-size: 8rem;"></i>
                    </div>
                </div>

            </div>

        </section>

        <!-- SECCIÓN 3: ¿NO ENCUENTRAS LO QUE BUSCAS? (Llamada a la Acción) -->
        <section class="py-5 bg-dark-custom my-4 border-top border-bottom border-dark-custom">
            <div class="container text-center py-4">
                <h2 class="fw-bold text-white display-6 mb-3">¿No encuentras lo que buscas?</h2>
                <p class="text-secondary-custom col-md-8 mx-auto mb-4">
                    Nuestro catálogo se actualiza diariamente con los últimos lanzamientos y actualizaciones de hardware. Únete a nuestra comunidad para estar al día.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-primary px-4 py-2 fw-semibold">Unirse a la Comunidad</button>
                    <button class="btn btn-outline-light px-4 py-2 fw-semibold">Soporte Técnico</button>
                </div>
            </div>
        </section>

    </main>

    
</body>
</html>
<?php
require_once 'includes/footer.php';
?>