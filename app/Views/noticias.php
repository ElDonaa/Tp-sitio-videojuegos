<?php
$titulo_pagina = "noticias - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- CONTENIDO PRINCIPAL: NOTICIAS -->
    <main class="main-content py-5">
        <div class="container">
            
            <!-- ENCABEZADO DE SECCIÓN Y FILTROS -->
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <span class="text-primary-custom fw-bold small text-uppercase"><i class="fa-regular fa-newspaper me-1"></i> Actualidad Gamer</span>
                    <h1 class="fw-black display-5 text-white mt-1 mb-2">Últimas noticias</h1>
                    <p class="text-secondary-custom mb-0">Entérate de todas las novedades de la industria, lanzamientos exclusivos, rumores de pasillo y las últimas tendencias tecnológicas.</p>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 text-lg-end">
                    <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                        <button class="btn filter-btn active">Todos</button>
                        <button class="btn filter-btn">PC</button>
                        <button class="btn filter-btn">PlayStation</button>
                        <button class="btn filter-btn">Xbox</button>
                        <button class="btn filter-btn">Nintendo</button>
                        <button class="btn filter-btn">Mobile</button>
                        <button class="btn filter-btn">Esports</button>
                    </div>
                </div>
            </div>

            <!-- ESTRUCTURA PRINCIPAL DE 2 COLUMNAS -->
            <div class="row g-4">
                
                <!-- COLUMNA IZQUIERDA: LISTA DE NOTICIAS -->
                <div class="col-lg-8">
                    
                    <!-- Noticia 1 -->
                    <article class="news-card p-3 mb-4 rounded bg-dark-custom">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-5 position-relative">
                                <span class="badge bg-primary position-absolute top-0 start-0 m-2">NOVEDADES</span>
                                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=600" class="img-fluid rounded w-100 object-fit-cover" style="height: 200px;" alt="GTA VI">
                            </div>
                            <div class="col-md-7">
                                <div class="text-muted extra-small mb-1">
                                    <i class="fa-regular fa-calendar me-1"></i> 12 de Mayo de 2025 &nbsp;|&nbsp; <i class="fa-regular fa-user me-1"></i> Admin
                                </div>
                                <h4 class="fw-bold text-white mb-2">Nuevo tráiler de GTA VI: todo lo que sabemos hasta la fecha</h4>
                                <p class="text-secondary-custom small mb-3">La espera por el título más ambicioso de Rockstar Games continúa. Analizamos cada fotograma del último metraje revelado...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small gap-3 d-flex">
                                        <span><i class="fa-regular fa-comment me-1"></i> 156</span>
                                        <span><i class="fa-solid fa-share-nodes me-1"></i></span>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Leer más <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Noticia 2 -->
                    <article class="news-card p-3 mb-4 rounded bg-dark-custom">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-5 position-relative">
                                <span class="badge bg-info position-absolute top-0 start-0 m-2">CONSOLAS</span>
                                <img src="https://images.unsplash.com/photo-1606813907291-d86efa9b94db?q=80&w=600" class="img-fluid rounded w-100 object-fit-cover" style="height: 200px;" alt="PlayStation">
                            </div>
                            <div class="col-md-7">
                                <div class="text-muted extra-small mb-1">
                                    <i class="fa-regular fa-calendar me-1"></i> 11 de Mayo de 2025 &nbsp;|&nbsp; <i class="fa-regular fa-user me-1"></i> GamerPro
                                </div>
                                <h4 class="fw-bold text-white mb-2">PlayStation confirma su nuevo State of Play para finales de mes</h4>
                                <p class="text-secondary-custom small mb-3">Sony ha anunciado oficialmente una nueva retransmisión centrada en los próximos lanzamientos de PS5 y PS VR2...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small gap-3 d-flex">
                                        <span><i class="fa-regular fa-comment me-1"></i> 89</span>
                                        <span><i class="fa-solid fa-share-nodes me-1"></i></span>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Leer más <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Noticia 3 -->
                    <article class="news-card p-3 mb-4 rounded bg-dark-custom">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-5 position-relative">
                                <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2">RUMORES</span>
                                <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600" class="img-fluid rounded w-100 object-fit-cover" style="height: 200px;" alt="Assassin's Creed">
                            </div>
                            <div class="col-md-7">
                                <div class="text-muted extra-small mb-1">
                                    <i class="fa-regular fa-calendar me-1"></i> 10 de Mayo de 2025 &nbsp;|&nbsp; <i class="fa-regular fa-user me-1"></i> ShadowHunter
                                </div>
                                <h4 class="fw-bold text-white mb-2">Se filtran imágenes del próximo juego de Ubisoft: ¿Assassin's Creed en Japón?</h4>
                                <p class="text-secondary-custom small mb-3">Un insider de la industria ha compartido artes conceptuales que sugieren un cambio de rumbo radical para la franquicia...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small gap-3 d-flex">
                                        <span><i class="fa-regular fa-comment me-1"></i> 243</span>
                                        <span><i class="fa-solid fa-share-nodes me-1"></i></span>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Leer más <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Noticia 4 -->
                    <article class="news-card p-3 mb-4 rounded bg-dark-custom">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-5 position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-0 m-2">HARDWARE</span>
                                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=600" class="img-fluid rounded w-100 object-fit-cover" style="height: 200px;" alt="Xbox Portable">
                            </div>
                            <div class="col-md-7">
                                <div class="text-muted extra-small mb-1">
                                    <i class="fa-regular fa-calendar me-1"></i> 09 de Mayo de 2025 &nbsp;|&nbsp; <i class="fa-regular fa-user me-1"></i> TechNews
                                </div>
                                <h4 class="fw-bold text-white mb-2">Xbox presenta su nueva consola portátil: Project Keystone es real</h4>
                                <p class="text-secondary-custom small mb-3">Phil Spencer mostró un prototipo funcional que permitirá jugar a todo el catálogo de Game Pass de forma nativa...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small gap-3 d-flex">
                                        <span><i class="fa-regular fa-comment me-1"></i> 312</span>
                                        <span><i class="fa-solid fa-share-nodes me-1"></i></span>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Leer más <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Botón Cargar Más -->
                    <div class="text-center my-4">
                        <button class="btn btn-outline-light px-4 py-2">Cargar más noticias</button>
                    </div>

                </div>

                <!-- COLUMNA DERECHA: SIDEBAR (DESTACADO, TENDENCIAS, PLATAFORMAS, BOLETÍN) -->
                <div class="col-lg-4">
                    
                    <!-- DESTACADO -->
                    <div class="card bg-dark-custom text-white mb-4 border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary-custom fw-bold small text-uppercase"><i class="fa-solid fa-bolt me-1"></i> DESTACADO</span>
                                <i class="fa-regular fa-star text-primary-custom"></i>
                            </div>
                            <div class="position-relative rounded overflow-hidden mb-3">
                                <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=600" class="img-fluid w-100" alt="E3 Digital">
                                <div class="position-absolute bottom-0 start-0 p-3 bg-dark bg-opacity-75 w-100">
                                    <span class="badge bg-primary mb-1">EVENTO ESPECIAL</span>
                                    <h6 class="fw-bold mb-0">Cobertura completa del E3 Digital: Todos los anuncios resumidos aquí.</h6>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 fw-bold">Ver Cobertura</button>
                        </div>
                    </div>

                    <!-- TENDENCIAS -->
                    <div class="card bg-dark-custom text-white mb-4 border-0">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3 text-uppercase fs-6"><i class="fa-solid fa-arrow-trend-up me-2 text-primary-custom"></i>Tendencias</h5>
                            
                            <ol class="list-group list-group-flush list-group-numbered bg-transparent">
                                <li class="list-group-item bg-transparent text-white border-bottom border-secondary d-flex justify-content-between align-items-start px-0 py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold small">Lanzamiento de Elden Ring: Shadow of the Erdtree</div>
                                        <span class="extra-small text-muted">HOY, 14:32</span>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent text-white border-bottom border-secondary d-flex justify-content-between align-items-start px-0 py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold small">Torneo Mundial de Valorant 2025</div>
                                        <span class="extra-small text-muted">HOY, 14:32</span>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent text-white border-bottom border-secondary d-flex justify-content-between align-items-start px-0 py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold small">Nuevos drivers para tarjetas gráficas serie 50</div>
                                        <span class="extra-small text-muted">HOY, 14:32</span>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent text-white border-0 d-flex justify-content-between align-items-start px-0 py-2">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold small">Actualización masiva de Cyberpunk 2077 v3.0</div>
                                        <span class="extra-small text-muted">HOY, 14:32</span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- PLATAFORMAS -->
                    <div class="card bg-dark-custom text-white mb-4 border-0">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3 text-uppercase fs-6">Plataformas</h5>
                            <div class="row g-2">
                                <div class="col-6"><a href="#" class="btn btn-outline-secondary w-100 btn-sm">PC Master Race</a></div>
                                <div class="col-6"><a href="#" class="btn btn-outline-secondary w-100 btn-sm">PlayStation</a></div>
                                <div class="col-6"><a href="#" class="btn btn-outline-secondary w-100 btn-sm">Xbox Series</a></div>
                                <div class="col-6"><a href="#" class="btn btn-outline-secondary w-100 btn-sm">Nintendo Switch</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- BOLETÍN / SUSCRIPCIÓN -->
                    <div class="card bg-dark-custom text-white border-0 text-center p-3">
                        <div class="card-body">
                            <i class="fa-regular fa-clock fs-3 text-primary-custom mb-2"></i>
                            <h5 class="fw-bold mb-2">¿No tienes tiempo?</h5>
                            <p class="text-secondary-custom extra-small mb-3">Suscríbete a nuestro boletín semanal y recibe lo más importante directamente en tu correo.</p>
                            <form>
                                <input type="email" class="form-control form-control-sm mb-2 text-center" placeholder="tu@email.com">
                                <button type="submit" class="btn btn-primary w-100 btn-sm fw-bold">Suscribirme</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

   
</body>
</html>
<?php
require_once 'includes/footer.php';
?>