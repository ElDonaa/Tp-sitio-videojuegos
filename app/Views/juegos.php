<?php
$titulo_pagina = "juegos - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- MAIN CONTENT AREA -->
    <main class="main-content">

        <!-- HEADER DEL CATÁLOGO -->
        <section class="container pt-5 pb-4">
            <span class="text-primary-custom fw-bold small"><i class="fa-solid fa-gamepad me-1"></i> CATÁLOGO DE JUEGOS</span>
            <div class="row align-items-end mt-2">
                <div class="col-lg-7 mb-3 mb-lg-0">
                    <h1 class="fw-black display-5 text-white">TODOS LOS <span class="text-primary-custom">JUEGOS</span></h1>
                    <p class="text-secondary-custom mb-0">Explora nuestra biblioteca completa de títulos. Filtra por plataforma, género o calificación para encontrar tu próxima gran aventura.</p>
                </div>
                <div class="col-lg-5">
                    <div class="search-box position-relative">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" class="form-control catalog-search-input" placeholder="Buscar títulos, géneros...">
                    </div>
                </div>
            </div>
        </section>

        <!-- FILTROS Y BARRA DE CATEGORÍAS -->
        <section class="container mb-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 border-bottom border-dark-custom pb-3">
                <!-- Filtros rápidos por plataforma -->
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn filter-btn active"><i class="fa-solid fa-border-all me-1"></i> Todos</button>
                    <button class="btn filter-btn"><i class="fa-solid fa-desktop me-1"></i> PC</button>
                    <button class="btn filter-btn"><i class="fa-brands fa-playstation me-1"></i> PlayStation</button>
                    <button class="btn filter-btn"><i class="fa-brands fa-xbox me-1"></i> Xbox</button>
                    <button class="btn filter-btn"><i class="fa-solid fa-gamepad me-1"></i> Nintendo</button>
                </div>

                <!-- Botón Filtros Avanzados -->
                <button class="btn filter-btn border-0 text-secondary-custom">
                    <i class="fa-solid fa-sliders me-1"></i> Filtros Avanzados
                </button>
            </div>
        </section>

        <!-- GRID DE JUEGOS (CATÁLOGO) -->
        <section class="container mb-5">
            <div class="row g-4">
                <!-- Juego 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.8</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • RPG</small>
                            <h5 class="fw-bold text-white mb-1">Elden Ring</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Acción / RPG</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.2</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • SHOOTER</small>
                            <h5 class="fw-bold text-white mb-1">Cyberpunk 2077</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">RPG / Sci-Fi</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper position-relative" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.5</span>
                            <span class="coming-soon-tag">COMING SOON</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • HORROR</small>
                            <h5 class="fw-bold text-white mb-1">Resident Evil 4</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Survival Horror</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 4 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.4</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">XBOX • RACING</small>
                            <h5 class="fw-bold text-white mb-1">Forza Horizon 5</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Simulador / Carreras</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 5 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>8.9</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • BATTLE ROYALE</small>
                            <h5 class="fw-bold text-white mb-1">Apex Legends</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Shooter / Acción</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 6 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.6</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • SANDBOX</small>
                            <h5 class="fw-bold text-white mb-1">Minecraft</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Aventura / Construcción</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 7 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper position-relative" style="background-image: url('https://images.unsplash.com/photo-1526738549149-8e07eca6c147?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.7</span>
                            <span class="coming-soon-tag">COMING SOON</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PLAYSTATION • ACCIÓN</small>
                            <h5 class="fw-bold text-white mb-1">GTA V</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Mundo Abierto</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Juego 8 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="game-card h-100">
                        <div class="card-img-wrapper" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=800');">
                            <span class="rating-badge"><i class="fa-solid fa-star text-warning me-1"></i>9.1</span>
                        </div>
                        <div class="p-3">
                            <small class="text-primary-custom fw-bold extra-small d-block mb-1">PC • TACTICAL</small>
                            <h5 class="fw-bold text-white mb-1">Valorant</h5>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="text-muted extra-small">Shooter Táctico</span>
                                <i class="fa-solid fa-chevron-right text-muted extra-small"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón Cargar Más -->
            <div class="text-center mt-5">
                <button class="btn load-more-btn">CARGAR MÁS JUEGOS</button>
            </div>
        </section>

        <!-- TENDENCIAS DE LA SEMANA -->
        <section class="container my-5 pt-4 border-top border-dark-custom">
            <h4 class="fw-bold text-white mb-4"><i class="fa-regular fa-star text-primary-custom me-2"></i>Tendencias de la semana</h4>

            <div class="row g-3">
                <!-- Trending Item 1 -->
                <div class="col-12 col-md-4">
                    <div class="trending-card p-3 d-flex align-items-center gap-3">
                        <div class="trending-thumb" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=200');"></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Top Título #1</h6>
                            <small class="text-muted d-block mb-1">ACCIÓN • 50K+ JUGADORES</small>
                            <span class="text-primary-custom fw-bold extra-small"><i class="fa-regular fa-star me-1"></i>9.8</span>
                        </div>
                    </div>
                </div>

                <!-- Trending Item 2 -->
                <div class="col-12 col-md-4">
                    <div class="trending-card p-3 d-flex align-items-center gap-3">
                        <div class="trending-thumb" style="background-image: url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=200');"></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Top Título #2</h6>
                            <small class="text-muted d-block mb-1">ACCIÓN • 50K+ JUGADORES</small>
                            <span class="text-primary-custom fw-bold extra-small"><i class="fa-regular fa-star me-1"></i>9.7</span>
                        </div>
                    </div>
                </div>

                <!-- Trending Item 3 -->
                <div class="col-12 col-md-4">
                    <div class="trending-card p-3 d-flex align-items-center gap-3">
                        <div class="trending-thumb" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=200');"></div>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Top Título #3</h6>
                            <small class="text-muted d-block mb-1">ACCIÓN • 50K+ JUGADORES</small>
                            <span class="text-primary-custom fw-bold extra-small"><i class="fa-regular fa-star me-1"></i>9.6</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
require_once 'includes/footer.php';
?>