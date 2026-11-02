<?php
$titulo_pagina = "analisis - GAMEZONE";
require_once 'includes/header.php';
?>
 
    <section class="analysis-hero py-5">
        <div class="container">
            <div class="hero-card position-relative overflow-hidden rounded-4 p-4 p-md-5">
                <div class="hero-bg-overlay"></div>
                <div class="row position-relative z-1 align-items-center">
                    <div class="col-lg-7">
                        <span class="badge bg-primary text-uppercase mb-3 px-3 py-2">Análisis Destacado</span>
                        <h1 class="display-4 fw-bold mb-3">Cyberpunk 2077:<br><span class="text-primary">La Redención Final</span></h1>
                        <p class="text-secondary lead mb-4">
                            Tras años de actualizaciones y el lanzamiento de Phantom Liberty, exploramos si el título de CD Projekt RED se ha convertido finalmente en el RPG definitivo que prometieron.
                        </p>
                        
                        <div class="d-flex flex-wrap align-items-center gap-4 mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rating-badge bg-primary text-white fw-bold fs-3 rounded-3 px-3 py-2">9.2</div>
                                <div>
                                    <div class="fw-bold text-uppercase fs-6">Imprescindible</div>
                                    <div class="text-warning small">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="border-start border-secondary ps-4">
                                <small class="text-secondary d-block text-uppercase">Plataformas</small>
                                <span class="fw-semibold">PC, PS5, Xbox Series X</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary px-4 py-2">Leer análisis completo</a>
                            <a href="#" class="btn btn-outline-light px-4 py-2"><i class="fa-regular fa-comment me-2"></i>Comentarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4">
        <div class="container">
            <div class="row g-4">
                
                
                <div class="col-lg-8">
                   
                    <div class="mb-4">
                        <h2 class="h3 fw-bold d-flex align-items-center gap-2 mb-2">
                            <i class="fa-regular fa-star text-primary"></i> ÚLTIMOS ANÁLISIS
                        </h2>
                        <p class="text-secondary small">Nuestro equipo de expertos pone a prueba los lanzamientos más recientes del mercado.</p>
                        
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-3">
                         
                            <div class="btn-group gap-1 flex-wrap" role="group">
                                <button type="button" class="btn btn-sm btn-primary rounded-pill px-3">Todos</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3">PC</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3">PS5</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Xbox</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Switch</button>
                            </div>
                           
                            <div>
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-filter me-1"></i> Filtrar por género...
                                </button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-md-6">
                            <div class="card bg-card border-0 h-100 rounded-4 overflow-hidden position-relative card-hover">
                                <div class="position-relative">
                                    <img src="img/tlou.jpg" class="card-img-top object-fit-cover" alt="The Last of Us Part I" style="height: 200px;">
                                    <span class="position-absolute top-0 end-0 m-3 badge bg-primary fs-6 px-3 py-2 rounded-3">9.5</span>
                                    <div class="position-absolute bottom-0 start-0 m-3 d-flex gap-1">
                                        <span class="badge bg-dark text-white border border-secondary small">PS5</span>
                                        <span class="badge bg-dark text-white border border-secondary small">PC</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <small class="text-primary fw-semibold text-uppercase mb-1">Acción / Aventura • 12 de Mayo, 2024</small>
                                    <h3 class="h5 fw-bold card-title">The Last of Us Part I: Una Obra Maestra Redefinida</h3>
                                    <p class="card-text text-secondary small flex-grow-1">"Una reconstrucción fiel que eleva la experiencia emocional a cotas nunca antes vistas en el hardware..."</p>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold">M</div>
                                            <span class="small text-secondary">Marcos R.</span>
                                        </div>
                                        <a href="#" class="text-primary text-decoration-none small fw-semibold">Ver análisis <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-card border-0 h-100 rounded-4 overflow-hidden position-relative card-hover">
                                <div class="position-relative">
                                    <img src="img/god-of-war.jpg" class="card-img-top object-fit-cover" alt="God of War Ragnarök" style="height: 200px;">
                                    <span class="position-absolute top-0 end-0 m-3 badge bg-primary fs-6 px-3 py-2 rounded-3">9.8</span>
                                    <div class="position-absolute bottom-0 start-0 m-3 d-flex gap-1">
                                        <span class="badge bg-dark text-white border border-secondary small">PS5</span>
                                        <span class="badge bg-dark text-white border border-secondary small">PS4</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <small class="text-primary fw-semibold text-uppercase mb-1">Acción / RPG • 10 de Mayo, 2024</small>
                                    <h3 class="h5 fw-bold card-title">God of War Ragnarök: El Cierre Perfecto de la Saga Nórdica</h3>
                                    <p class="card-text text-secondary small flex-grow-1">"Kratos y Atreus regresan en una aventura épica que equilibra perfectamente el combate visceral con una..."</p>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-info text-white rounded-circle d-flex align-items-center justify-content-center fw-bold">E</div>
                                            <span class="small text-secondary">Elena G.</span>
                                        </div>
                                        <a href="#" class="text-primary text-decoration-none small fw-semibold">Ver análisis <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="card bg-card border-0 h-100 rounded-4 overflow-hidden position-relative card-hover">
                                <div class="position-relative">
                                    <img src="img/hogwarts.jpg" class="card-img-top object-fit-cover" alt="Hogwarts Legacy" style="height: 200px;">
                                    <span class="position-absolute top-0 end-0 m-3 badge bg-success fs-6 px-3 py-2 rounded-3">8.5</span>
                                    <div class="position-absolute bottom-0 start-0 m-3 d-flex gap-1">
                                        <span class="badge bg-dark text-white border border-secondary small">PC</span>
                                        <span class="badge bg-dark text-white border border-secondary small">Xbox</span>
                                        <span class="badge bg-dark text-white border border-secondary small">PS5</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <small class="text-primary fw-semibold text-uppercase mb-1">Mundo Abierto / RPG • 08 de Mayo, 2024</small>
                                    <h3 class="h5 fw-bold card-title">Hogwarts Legacy: La Magia que Siempre Soñamos</h3>
                                    <p class="card-text text-secondary small flex-grow-1">"Explorar el castillo de Hogwarts es un sueño hecho realidad para cualquier fan, aunque algunos aspectos del mundo..."</p>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold">J</div>
                                            <span class="small text-secondary">Javier S.</span>
                                        </div>
                                        <a href="#" class="text-primary text-decoration-none small fw-semibold">Ver análisis <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="card bg-card border-0 h-100 rounded-4 overflow-hidden position-relative card-hover">
                                <div class="position-relative">
                                    <img src="img/rdr2.jpg" class="card-img-top object-fit-cover" alt="Red Dead Redemption 2" style="height: 200px;">
                                    <span class="position-absolute top-0 end-0 m-3 badge bg-primary fs-6 px-3 py-2 rounded-3">9.8</span>
                                    <div class="position-absolute bottom-0 start-0 m-3 d-flex gap-1">
                                        <span class="badge bg-dark text-white border border-secondary small">PC</span>
                                        <span class="badge bg-dark text-white border border-secondary small">Xbox</span>
                                        <span class="badge bg-dark text-white border border-secondary small">PS4</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <small class="text-primary fw-semibold text-uppercase mb-1">Western / Aventura • 05 de Mayo, 2024</small>
                                    <h3 class="h5 fw-bold card-title">Red Dead Redemption 2: Un Atardecer Eterno</h3>
                                    <p class="card-text text-secondary small flex-grow-1">"Rockstar Games alcanza la perfección técnica y narrativa en este simulador de vida de forajido sin..."</p>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25 mt-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold">D</div>
                                            <span class="small text-secondary">David L.</span>
                                        </div>
                                        <a href="#" class="text-primary text-decoration-none small fw-semibold">Ver análisis <i class="fa-solid fa-chevron-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="text-center my-5">
                        <button class="btn btn-outline-primary px-5 py-2 rounded-pill">Cargar más análisis</button>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    
                    
                    <div class="card bg-card border-0 rounded-4 p-4 mb-4">
                        <h3 class="h5 fw-bold text-primary mb-3 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-trophy"></i> MEJOR VALORADOS 2024
                        </h3>
                        <div class="d-flex flex-column gap-3">
                           
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="img/elden-ring.jpg" class="rounded-3 object-fit-cover" width="48" height="48" alt="Elden Ring">
                                    <div>
                                        <h4 class="h6 fw-bold mb-0">Elden Ring: Shadow of the Erdtree</h4>
                                        <small class="text-secondary">RANK #1</small>
                                    </div>
                                </div>
                                <span class="fw-bold text-primary fs-5">9.8</span>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="img/ff7.jpg" class="rounded-3 object-fit-cover" width="48" height="48" alt="Final Fantasy">
                                    <div>
                                        <h4 class="h6 fw-bold mb-0">Final Fantasy VII Rebirth</h4>
                                        <small class="text-secondary">RANK #2</small>
                                    </div>
                                </div>
                                <span class="fw-bold text-primary fs-5">9.6</span>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="img/hades2.jpg" class="rounded-3 object-fit-cover" width="48" height="48" alt="Hades II">
                                    <div>
                                        <h4 class="h6 fw-bold mb-0">Hades II</h4>
                                        <small class="text-secondary">RANK #3</small>
                                    </div>
                                </div>
                                <span class="fw-bold text-primary fs-5">9.4</span>
                            </div>
                           
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="img/dragons-dogma.jpg" class="rounded-3 object-fit-cover" width="48" height="48" alt="Dragon's Dogma 2">
                                    <div>
                                        <h4 class="h6 fw-bold mb-0">Dragon's Dogma 2</h4>
                                        <small class="text-secondary">RANK #4</small>
                                    </div>
                                </div>
                                <span class="fw-bold text-primary fs-5">9.0</span>
                            </div>
                        </div>
                        <a href="#" class="text-primary text-center text-decoration-none small fw-semibold mt-4 d-block">Ver ranking completo</a>
                    </div>

                    
                    <div class="card bg-card border-0 rounded-4 p-4 mb-4">
                        <h3 class="h6 fw-bold text-uppercase mb-3 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-chart-line text-primary"></i> TENDENCIAS
                        </h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#E3</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#GTA-VI</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#Soulslike</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#SteamDeck</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#PlayStationShowcase</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#UE5</span>
                            <span class="badge bg-dark-subtle border border-secondary text-white py-2 px-3">#RetroGaming</span>
                        </div>
                    </div>

                    
                    <div class="card bg-card border-0 rounded-4 p-4 mb-4">
                        <h3 class="h6 fw-bold text-primary mb-1 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-sparkles"></i> Newsletter Pro
                        </h3>
                        <p class="text-secondary small mb-3">Recibe los mejores análisis y guías directamente en tu correo cada semana.</p>
                        <form>
                            <input type="email" class="form-control bg-dark border-secondary text-white mb-3" placeholder="tu@email.com">
                            <button type="button" class="btn btn-primary w-100 fw-semibold">Suscribirme ahora</button>
                        </form>
                    </div>

                    
                    <div class="card bg-card border-0 rounded-4 overflow-hidden position-relative">
                        <div class="p-3 bg-dark-subtle d-flex justify-content-between align-items-center border-bottom border-secondary border-opacity-25">
                            <span class="small fw-bold text-uppercase text-primary">STAFF PICK</span>
                            <i class="fa-regular fa-thumbs-up text-secondary"></i>
                        </div>
                        <div class="position-relative">
                            <img src="img/indie.jpg" class="w-100 object-fit-cover" style="height: 180px;" alt="Indie de la semana">
                            <div class="position-absolute bottom-0 start-0 p-3 bg-gradient-dark w-100">
                                <h4 class="h5 fw-bold mb-0">"Indie de la Semana"</h4>
                                <small class="text-secondary"><i class="fa-regular fa-clock me-1"></i>Lectura de 5 min</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

   
    <section class="py-5 bg-darker">
        <div class="container">
            <h2 class="h3 fw-bold d-flex align-items-center gap-2 mb-4">
                <i class="fa-solid fa-gamepad text-primary"></i> ANÁLISIS POR PLATAFORMA
            </h2>
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="platform-card p-4 rounded-4 text-center border border-success border-opacity-25 bg-dark">
                        <h3 class="h5 fw-bold text-success mb-1">PC GAMING</h3>
                        <small class="text-secondary">1240 Reseñas</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="platform-card p-4 rounded-4 text-center border border-primary border-opacity-25 bg-dark">
                        <h3 class="h5 fw-bold text-primary mb-1">PLAYSTATION 5</h3>
                        <small class="text-secondary">856 Reseñas</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="platform-card p-4 rounded-4 text-center border border-success border-opacity-25 bg-dark">
                        <h3 class="h5 fw-bold text-success mb-1">XBOX SERIES X|S</h3>
                        <small class="text-secondary">742 Reseñas</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="platform-card p-4 rounded-4 text-center border border-danger border-opacity-25 bg-dark">
                        <h3 class="h5 fw-bold text-danger mb-1">NINTENDO SWITCH</h3>
                        <small class="text-secondary">532 Reseñas</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <section class="py-5">
        <div class="container">
            <div class="card bg-card border-0 rounded-4 p-4 p-md-5">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                    <div>
                        <h2 class="h3 fw-bold mb-1">Comunidad de Críticos</h2>
                        <p class="text-secondary small mb-0">Únete a la conversación sobre los últimos puntajes otorgados.</p>
                    </div>
                    <a href="#" class="btn btn-outline-primary px-4 py-2">Ir al foro de análisis</a>
                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="p-3 bg-dark rounded-3 border border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs bg-secondary rounded-circle"></div>
                                    <span class="small fw-semibold">Usuario_42</span>
                                </div>
                                <small class="text-secondary">Hace 2h</small>
                            </div>
                            <p class="small fw-semibold mb-2">¿Realmente merece un 9.5 el nuevo TLoU?</p>
                            <div class="d-flex gap-3 text-secondary small">
                                <span><i class="fa-regular fa-comment me-1"></i>24</span>
                                <span><i class="fa-solid fa-share me-1"></i>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-dark rounded-3 border border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs bg-secondary rounded-circle"></div>
                                    <span class="small fw-semibold">Usuario_84</span>
                                </div>
                                <small class="text-secondary">Hace 2h</small>
                            </div>
                            <p class="small fw-semibold mb-2">¿Realmente merece un 9.5 el nuevo TLoU?</p>
                            <div class="d-flex gap-3 text-secondary small">
                                <span><i class="fa-regular fa-comment me-1"></i>24</span>
                                <span><i class="fa-solid fa-share me-1"></i>8</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-dark rounded-3 border border-secondary border-opacity-25">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs bg-secondary rounded-circle"></div>
                                    <span class="small fw-semibold">Usuario_126</span>
                                </div>
                                <small class="text-secondary">Hace 2h</small>
                            </div>
                            <p class="small fw-semibold mb-2">¿Realmente merece un 9.5 el nuevo TLoU?</p>
                            <div class="d-flex gap-3 text-secondary small">
                                <span><i class="fa-regular fa-comment me-1"></i>24</span>
                                <span><i class="fa-solid fa-share me-1"></i>8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <
    <?php
require_once 'includes/footer.php';
?>