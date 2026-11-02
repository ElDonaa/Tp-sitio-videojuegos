<?php
$titulo_pagina = "guias - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- HERO SECTION / SECCIÓN SUPERIOR -->
    <section class="py-5 text-center">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-pill px-3 py-1 mb-3 text-primary small">
                <i class="fa-solid fa-book-open"></i> CENTRO DE CONOCIMIENTO
            </div>
            <h1 class="display-4 fw-bold mb-3">Guías y <span class="text-primary">Tutoriales</span></h1>
            <p class="text-secondary mx-auto mb-4" style="max-width: 650px;">
                Aprende, mejora y saca el máximo provecho a tus juegos favoritos con nuestras guías expertas y walkthroughs detallados.
            </p>

            <!-- BARRA DE BÚSQUEDA -->
            <div class="mx-auto" style="max-width: 600px;">
                <div class="input-group bg-card border border-secondary border-opacity-25 rounded-pill p-1 ps-3">
                    <span class="input-group-text bg-transparent border-0 text-secondary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="form-control bg-transparent border-0 text-white shadow-none" placeholder="Buscar guías por juego, tema o plataforma...">
                    <button class="btn btn-primary rounded-pill px-4" type="button">Buscar</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENIDO PRINCIPAL CON SIDEBAR -->
    <section class="pb-5">
        <div class="container">
            <div class="row g-4">

                <!-- SIDEBAR / FILTROS IZQUIERDA -->
                <aside class="col-lg-3">
                    
                    <!-- CATEGORÍAS -->
                    <div class="mb-4">
                        <h6 class="text-uppercase text-secondary fw-bold small mb-3">CATEGORÍAS</h6>
                        <div class="d-flex flex-column gap-1">
                            <a href="#" class="btn btn-primary text-start d-flex justify-content-between align-items-center rounded-3 py-2 px-3">
                                <span><i class="fa-solid fa-gamepad me-2"></i> Todos los juegos</span>
                                <span class="badge bg-white text-primary rounded-pill">124</span>
                            </a>
                            <a href="#" class="btn btn-dark text-start text-secondary d-flex justify-content-between align-items-center rounded-3 py-2 px-3">
                                <span><i class="fa-solid fa-crosshair me-2"></i> Armas y equipo</span>
                                <span class="small text-secondary">42</span>
                            </a>
                            <a href="#" class="btn btn-dark text-start text-secondary d-flex justify-content-between align-items-center rounded-3 py-2 px-3">
                                <span><i class="fa-solid fa-gem me-2"></i> Coleccionables</span>
                                <span class="small text-secondary">28</span>
                            </a>
                            <a href="#" class="btn btn-dark text-start text-secondary d-flex justify-content-between align-items-center rounded-3 py-2 px-3">
                                <span><i class="fa-solid fa-bolt me-2"></i> Estrategia</span>
                                <span class="small text-secondary">19</span>
                            </a>
                            <a href="#" class="btn btn-dark text-start text-secondary d-flex justify-content-between align-items-center rounded-3 py-2 px-3">
                                <span><i class="fa-solid fa-trophy me-2"></i> Logros / Trofeos</span>
                                <span class="small text-secondary">35</span>
                            </a>
                        </div>
                    </div>

                    <!-- PLATAFORMAS -->
                    <div class="mb-4">
                        <h6 class="text-uppercase text-secondary fw-bold small mb-3">PLATAFORMAS</h6>
                        <div class="row g-2">
                            <div class="col-6"><button class="btn btn-dark w-100 btn-sm py-2 fw-semibold text-secondary">PC GAMING</button></div>
                            <div class="col-6"><button class="btn btn-dark w-100 btn-sm py-2 fw-semibold text-secondary">PLAYSTATION</button></div>
                            <div class="col-6"><button class="btn btn-dark w-100 btn-sm py-2 fw-semibold text-secondary">XBOX SERIES</button></div>
                            <div class="col-6"><button class="btn btn-dark w-100 btn-sm py-2 fw-semibold text-secondary">NINTENDO SWITCH</button></div>
                        </div>
                    </div>

                    <!-- TENDENCIAS HOY -->
                    <div>
                        <h6 class="text-uppercase text-secondary fw-bold small mb-3"><i class="fa-solid fa-fire text-primary me-1"></i> TENDENCIAS HOY</h6>
                        <div class="d-flex flex-column gap-3">
                            <a href="#" class="d-flex align-items-center gap-3 text-decoration-none text-white">
                                <img src="img/Plataformas.png" class="rounded-2 object-fit-cover" width="50" height="50" alt="Materia Roja">
                                <div>
                                    <h6 class="mb-0 small fw-bold">LOCALIZACIÓN MATERIA ROJA</h6>
                                    <small class="text-secondary opacity-75" style="font-size: 11px;">Hace 2 horas</small>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3 text-decoration-none text-white">
                                <img src="img/Plataformas.png" class="rounded-2 object-fit-cover" width="50" height="50" alt="Elden Ring">
                                <div>
                                    <h6 class="mb-0 small fw-bold">SPEEDRUN ELDEN RING</h6>
                                    <small class="text-secondary opacity-75" style="font-size: 11px;">Hace 4 horas</small>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3 text-decoration-none text-white">
                                <img src="img/Plataformas.png" class="rounded-2 object-fit-cover" width="50" height="50" alt="GTA VI Leak">
                                <div>
                                    <h6 class="mb-0 small fw-bold">TRUCOS GTA VI LEAK</h6>
                                    <small class="text-secondary opacity-75" style="font-size: 11px;">Hace 6 horas</small>
                                </div>
                            </a>
                        </div>
                    </div>

                </aside>

                <!-- ÁREA DE TARJETAS / PARRILLA DE GUÍAS -->
                <main class="col-lg-9">
                    
                    <!-- ENCABEZADO DE SECCIÓN Y ORDENAR -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <h2 class="h5 fw-bold mb-0"><i class="fa-regular fa-star text-primary me-2"></i>Guías Destacadas</h2>
                            <span class="badge bg-secondary bg-opacity-25 text-secondary rounded-pill px-3 py-2">Recién actualizadas</span>
                        </div>
                        <div class="small text-secondary">
                            Ordenar por: <span class="text-white fw-bold cursor-pointer">Más recientes <i class="fa-solid fa-chevron-down ms-1"></i></span>
                        </div>
                    </div>

                    <!-- GRID DE TARJETAS -->
                    <div class="row g-4">
                        
                        <!-- Tarjeta 1 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Armas">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Armas</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 12 MIN</span>
                                        <span class="badge bg-warning bg-opacity-10 text-warning px-2 py-1">MEDIA</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Cómo conseguir todas las armas legendarias</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Localización detallada de cada arma y las mejores mejoras para sobrevivir al...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 2 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Estrategia">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Estrategia</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 25 MIN</span>
                                        <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1">EXPERTO</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Mejores builds para Elden Ring DLC</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Domina el nuevo DLC con estas configuraciones optimizadas para fuerza...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 3 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Exploración">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Exploración</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 18 MIN</span>
                                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1">FÁCIL</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Guía completa de coleccionables</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Encuentra todos los templos, biomas raros y tesoros escondidos en tu mundo...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 4 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Competitivo">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Competitivo</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 15 MIN</span>
                                        <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1">EXPERTO</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Estrategias avanzadas de posicionamiento</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Aprende a posicionarte como un profesional en los mapas competitivos...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 5 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Walkthrough">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Walkthrough</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 30 MIN</span>
                                        <span class="badge bg-warning bg-opacity-10 text-warning px-2 py-1">MEDIA</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Walkthrough: El Templo Perdido</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Paso a paso para resolver los acertijos más complejos y derrotar al jefe final...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 6 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-card border-0 rounded-4 overflow-hidden h-100 d-flex flex-column">
                                <div class="position-relative">
                                    <img src="img/Plataformas.png" class="card-img-top object-fit-cover" style="height: 160px;" alt="Técnico">
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-primary rounded-pill px-3 py-1">Técnico</span>
                                </div>
                                <div class="card-body p-3 d-flex flex-column flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 text-secondary mb-2" style="font-size: 11px;">
                                        <span><i class="fa-regular fa-clock me-1"></i> 10 MIN</span>
                                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1">FÁCIL</span>
                                    </div>
                                    <h3 class="h6 fw-bold card-title mb-2">Guía de Optimización de FPS</h3>
                                    <p class="card-text text-secondary small flex-grow-1">Configura los mejores ajustes gráficos para obtener el máximo rendimiento sin...</p>
                                    <a href="#" class="text-white text-decoration-none small fw-semibold pt-3 d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 mt-2">
                                        Leer guía completa <i class="fa-solid fa-chevron-right text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- CARGAR MÁS GUÍAS -->
                    <div class="text-center my-5">
                        <small class="text-secondary d-block mb-3">Mostrando 6 de 124 guías disponibles</small>
                        <button class="btn btn-dark border border-secondary border-opacity-25 px-4 py-2 rounded-3 text-white fw-semibold">Cargar más guías</button>
                    </div>

                    <!-- BANNER CALL TO ACTION: ESCRIBIR UNA GUÍA -->
                    <div class="card bg-card border border-secondary border-opacity-25 rounded-4 p-4 p-md-5">
                        <div class="row align-items-center g-3">
                            <div class="col-md-8">
                                <h3 class="h4 fw-bold mb-2">¿Eres un experto en algún juego?</h3>
                                <p class="text-secondary mb-0 small">Únete a nuestra red de colaboradores y comparte tus conocimientos con la comunidad.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="#" class="btn btn-primary px-4 py-2 rounded-3 fw-semibold">Escribir una guía <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </main>

            </div>
        </div>
    </section>

</body>
</html>
<?php
require_once 'includes/footer.php';
?>