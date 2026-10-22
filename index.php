<?php
$titulo_pagina = "inicio - GAMEZONE";
require_once 'includes/header.php';
?>  
    <main class="main-content">
        
        
        <section class="hero-section text-white d-flex align-items-center">
            <div class="hero-overlay"></div>
            <div class="container position-relative z-2 py-5">
                <div class="col-lg-7">
                    <span class="badge badge-launch mb-3">NUEVO LANZAMIENTO EXCLUSIVO</span>
                    <h1 class="hero-title fw-black my-3">TU MUNDO GAMER<br><span class="text-primary-custom">EN UN SOLO LUGAR</span></h1>
                    <p class="hero-description text-secondary-custom mb-4">
                        Explora las últimas noticias, análisis profundos y guías expertas de los títulos más esperados del año. Únete a la comunidad de GAMEZONE hoy mismo.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#" class="btn btn-primary-custom"><i class="fa-solid fa-play me-2"></i> Explorar juegos</a>
                        <a href="#" class="btn btn-secondary-custom"><i class="fa-regular fa-clock me-2"></i> Ver análisis</a>
                    </div>

                    <div class="d-flex gap-5 border-top border-dark-custom pt-4">
                        <div>
                            <h3 class="fw-bold mb-0">15k+</h3>
                            <small class="text-uppercase text-muted fw-bold">Reseñas</small>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">800+</h3>
                            <small class="text-uppercase text-muted fw-bold">Juegos</small>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0">50k+</h3>
                            <small class="text-uppercase text-muted fw-bold">Gamers</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 
        <section class="container my-5 py-4">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <span class="text-primary-custom fw-bold small">✦ LO MEJOR DEL MES</span>
                    <h2 class="fw-black mb-0">JUEGOS DESTACADOS</h2>
                </div>
                <a href="#" class="text-secondary-custom text-decoration-none fw-semibold">Ver todos los juegos &gt;</a>
            </div>

            <div class="row g-4">
                <!-- Game Card 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.8</span>
                        </div>
                        <div class="p-3">
                            <div class="d-flex gap-1 mb-2">
                                <span class="platform-tag">PC</span>
                                <span class="platform-tag">PS5</span>
                                <span class="platform-tag">XBS</span>
                            </div>
                            <h5 class="fw-bold mb-1">ELDEN RING: SHADOW</h5>
                            <p class="text-muted small fw-bold mb-0">ACCIÓN RPG</p>
                        </div>
                    </div>
                </div>

                <!-- Game Card 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.2</span>
                        </div>
                        <div class="p-3">
                            <div class="d-flex gap-1 mb-2">
                                <span class="platform-tag">PC</span>
                                <span class="platform-tag">PS5</span>
                                <span class="platform-tag">XBS</span>
                            </div>
                            <h5 class="fw-bold mb-1">CYBERPUNK 2077: PHANTOM</h5>
                            <p class="text-muted small fw-bold mb-0">SCI-FI SHOOTER</p>
                        </div>
                    </div>
                </div>

                <!-- Game Card 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.5</span>
                        </div>
                        <div class="p-3">
                            <div class="d-flex gap-1 mb-2">
                                <span class="platform-tag">PS5</span>
                            </div>
                            <h5 class="fw-bold mb-1">THE LAST OF US PART II</h5>
                            <p class="text-muted small fw-bold mb-0">SURVIVAL HORROR</p>
                        </div>
                    </div>
                </div>

                <!-- Game Card 4 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.0</span>
                        </div>
                        <div class="p-3">
                            <div class="d-flex gap-1 mb-2">
                                <span class="platform-tag">PC</span>
                                <span class="platform-tag">XBS</span>
                            </div>
                            <h5 class="fw-bold mb-1">FORZA HORIZON 5</h5>
                            <p class="text-muted small fw-bold mb-0">CARRERAS</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mini Banner Cards -->
            <div class="row g-3 mt-4">
                <div class="col-12 col-md-4">
                    <div class="info-card p-3 d-flex align-items-center gap-3">
                        <i class="fa-solid fa-border-all fs-4 text-primary-custom"></i>
                        <div>
                            <h6 class="fw-bold mb-0">LANZAMIENTOS</h6>
                            <small class="text-muted">Próximos títulos</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="info-card p-3 d-flex align-items-center gap-3">
                        <i class="fa-solid fa-chart-line fs-4 text-primary-custom"></i>
                        <div>
                            <h6 class="fw-bold mb-0">TENDENCIAS</h6>
                            <small class="text-muted">Lo más jugado ahora</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="info-card p-3 d-flex align-items-center gap-3">
                        <i class="fa-regular fa-clock fs-4 text-primary-custom"></i>
                        <div>
                            <h6 class="fw-bold mb-0">ANÁLISIS RECIENTES</h6>
                            <small class="text-muted">Opiniones de expertos</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN NOTICIAS + SIDEBAR -->
        <section class="container my-5">
            <div class="row g-4">
                <!-- Columna Noticias -->
                <div class="col-12 col-lg-8">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <span class="text-primary-custom fw-bold small">✦ NOVEDADES DE LA INDUSTRIA</span>
                            <h2 class="fw-black mb-0">ÚLTIMAS NOTICIAS</h2>
                        </div>
                        <a href="#" class="text-secondary-custom text-decoration-none fw-semibold">Leer más noticias &gt;</a>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div class="news-item p-3 d-flex gap-3 align-items-center">
                            <div class="news-thumb" style="background-image: url('https://images.unsplash.com/photo-1606813907291-d86efa9b94db?q=80&w=400');"></div>
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">NOTICIAS</span>
                                    <small class="text-muted">12 DE MAYO, 2024</small>
                                </div>
                                <h5 class="fw-bold mb-0">PlayStation anuncia su nuevo State of Play para Junio</h5>
                            </div>
                        </div>

                        <div class="news-item p-3 d-flex gap-3 align-items-center">
                            <div class="news-thumb" style="background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=400');"></div>
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">RUMORES</span>
                                    <small class="text-muted">10 DE MAYO, 2024</small>
                                </div>
                                <h5 class="fw-bold mb-0">GTA VI: Se filtran nuevos detalles sobre el mapa dinámico</h5>
                            </div>
                        </div>

                        <div class="news-item p-3 d-flex gap-3 align-items-center">
                            <div class="news-thumb" style="background-image: url('https://images.unsplash.com/photo-1526738549149-8e07eca6c147?q=80&w=400');"></div>
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">HARDWARE</span>
                                    <small class="text-muted">08 DE MAYO, 2024</small>
                                </div>
                                <h5 class="fw-bold mb-0">Xbox presenta su nueva consola portátil conceptual</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Sidebar -->
                <div class="col-12 col-lg-4">
                    <div class="sidebar-box text-center p-4 mb-4">
                        <div class="sidebar-icon mx-auto mb-3">
                            <i class="fa-solid fa-users fs-4"></i>
                        </div>
                        <h4 class="fw-bold">Comunidad Gamer</h4>
                        <p class="text-muted small mb-4">Únete a miles de jugadores, comparte tus capturas y encuentra tu próximo equipo para raids.</p>
                        <button class="btn btn-primary-custom w-100">Unirse al Discord</button>
                    </div>

                    <div class="sidebar-box p-3 mb-4">
                        <div class="d-flex gap-3 align-items-start">
                            <i class="fa-solid fa-shield-halved text-primary-custom fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">SITIO VERIFICADO</h6>
                                <p class="text-muted extra-small mb-0">Todos nuestros análisis son independientes y libres de patrocinios externos.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <small class="text-uppercase text-muted fw-bold d-block mb-3">PLATAFORMAS POPULARES</small>
                        <div class="row g-2">
                            <div class="col-6">
                                <button class="btn btn-platform w-100"><i class="fa-brands fa-playstation me-2"></i>PlayStation</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-platform w-100"><i class="fa-brands fa-xbox me-2"></i>Xbox</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-platform w-100"><i class="fa-solid fa-gamepad me-2"></i>Nintendo</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-platform w-100"><i class="fa-solid fa-desktop me-2"></i>PC Master Race</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section class="container my-5">
            <div class="newsletter-card p-4 p-md-5 position-relative overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-lg-8 z-2">
                        <h2 class="fw-black mb-2">NO TE PIERDAS DE NADA</h2>
                        <p class="text-secondary-custom mb-4">Suscríbete a nuestro boletín semanal y recibe lo mejor del mundo gaming directamente en tu bandeja de entrada.</p>
                        
                        <form class="row g-2 max-w-500">
                            <div class="col-8">
                                <input type="email" class="form-control custom-input" placeholder="Tu correo electrónico" required>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary-custom w-100">SUSCRIBIRSE</button>
                            </div>
                        </form>
                        <small class="text-muted extra-small mt-2 d-block">Al suscribirte, aceptas nuestra política de privacidad y términos de servicio.</small>
                    </div>
                </div>
                <i class="fa-solid fa-gamepad newsletter-bg-icon"></i>
            </div>
        </section>
<?php
require_once 'includes/footer.php';
?>