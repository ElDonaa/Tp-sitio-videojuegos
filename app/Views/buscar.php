<?php
$titulo_pagina = "buscar - GAMEZONE";

// Variable para el término de búsqueda
$termino_busqueda = "";

// Verificamos si se envió información mediante el método GET
if (isset($_GET['q'])) {
    $termino_busqueda = trim($_GET['q']);
}

require_once 'includes/header.php';
?>

    <!-- SECCIÓN BÚSQUEDA Y BREADCRUMB -->
    <main class="py-4">
        <div class="container">
            
            <!-- BREADCRUMB & TÍTULO -->
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb small text-uppercase fw-semibold mb-1" style="font-size: 11px;">
                            <li class="breadcrumb-item"><a href="index.html" class="text-secondary text-decoration-none">INICIO</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">BÚSQUEDA</li>
                        </ol>
                    </nav>
                    <h1 class="fw-bold mb-0 text-uppercase">EXPLORAR <span class="text-primary">CATÁLOGO</span></h1>
                </div>
                <small class="text-secondary d-none d-md-block" style="font-size: 12px;">
                    <i class="fa-regular fa-clock me-1"></i> Resultados actualizados hace 2 minutos
                </small>
            </div>

            <!-- BARRA DE BÚSQUEDA Y CONTROLES (FORMULARIO GET / AJAX) -->
            <div class="bg-card border border-secondary border-opacity-25 rounded-3 p-3 mb-3">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-7">
                        <div class="input-group bg-dark border border-secondary border-opacity-25 rounded-3">
                            <span class="input-group-text bg-transparent border-0 text-secondary">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <!-- Se agregó id="inputBusqueda" requerido para que el Fetch API capture el evento input en tiempo real -->
                            <input type="text" id="inputBusqueda" name="q" class="form-control bg-transparent border-0 text-white shadow-none" value="<?php echo htmlspecialchars($termino_busqueda, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Buscar juegos en tiempo real...">
                            <a href="buscar.php" class="btn border-0 text-secondary text-decoration-none d-flex align-items-center"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center justify-content-lg-end gap-2">
                        <div class="btn-group me-2" role="group">
                            <button type="button" class="btn btn-outline-secondary active"><i class="fa-solid fa-border-all"></i></button>
                            <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-list"></i></button>
                        </div>
                        <select class="form-select bg-dark border-secondary border-opacity-25 text-white w-auto shadow-none small">
                            <option selected>Más relevantes</option>
                            <option value="1">Precio: Menor a Mayor</option>
                            <option value="2">Precio: Mayor a Menor</option>
                            <option value="3">Mejor valorados</option>
                        </select>
                    </div>
                </div>

                <!-- FILTROS ACTIVOS (CHIPS) -->
                <div class="d-flex align-items-center gap-2 mt-3 flex-wrap" style="font-size: 12px;">
                    <span class="text-secondary me-2">Filtros activos:</span>
                    <span class="badge bg-primary bg-opacity-25 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1 fw-normal">PS5 <i class="fa-solid fa-xmark ms-1 cursor-pointer"></i></span>
                    <span class="badge bg-primary bg-opacity-25 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1 fw-normal">RPG <i class="fa-solid fa-xmark ms-1 cursor-pointer"></i></span>
                    <span class="badge bg-primary bg-opacity-25 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1 fw-normal">&lt; 60€ <i class="fa-solid fa-xmark ms-1 cursor-pointer"></i></span>
                </div>
            </div>

            <!-- CONTENIDO PRINCIPAL: FILTROS + RESULTADOS -->
            <div class="row g-4 mt-1">
                
                <!-- COLUMNA IZQUIERDA: FILTROS -->
                <aside class="col-lg-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="fw-bold text-white mb-0 text-uppercase d-flex align-items-center gap-2" style="font-size: 13px;">
                            <i class="fa-solid fa-sliders text-primary"></i> Filtros
                        </h6>
                        <a href="#" class="text-secondary text-decoration-none small" style="font-size: 11px;">Limpiar</a>
                    </div>

                    <!-- ACCORDEON / SECCIONES DE FILTROS -->
                    <div class="d-flex flex-column gap-4">
                        
                        <!-- FILTRO: PLATAFORMAS -->
                        <div class="border-bottom border-secondary border-opacity-25 pb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-uppercase small" style="font-size: 11px; letter-spacing: 0.5px;">PLATAFORMAS</span>
                                <i class="fa-solid fa-chevron-up small text-secondary" style="font-size: 10px;"></i>
                            </div>
                            <div class="d-flex flex-column gap-2 small">
                                <div class="form-check d-flex justify-content-between align-items-center ps-0">
                                    <div>
                                        <input class="form-check-input ms-0 me-2" type="checkbox" id="pc">
                                        <label class="form-check-label text-secondary" for="pc">PC Master Race</label>
                                    </div>
                                    <span class="text-secondary opacity-50" style="font-size: 10px;">1240</span>
                                </div>
                                <div class="form-check d-flex justify-content-between align-items-center ps-0">
                                    <div>
                                        <input class="form-check-input ms-0 me-2" type="checkbox" id="ps5" checked>
                                        <label class="form-check-label text-white" for="ps5">PlayStation 5</label>
                                    </div>
                                    <span class="text-secondary opacity-50" style="font-size: 10px;">850</span>
                                </div>
                            </div>
                        </div>

                        <!-- BANNER TARJETA SORTEO SEMANAL -->
                        <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-3 position-relative overflow-hidden">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="text-uppercase fw-bold text-primary" style="font-size: 10px; letter-spacing: 0.5px;">SORTEO SEMANAL</span>
                                <i class="fa-solid fa-trophy text-primary fs-5"></i>
                            </div>
                            <p class="fw-bold small mb-3 text-white">¡Gana una suscripción anual a GAMEZONE Pass!</p>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold d-inline-flex align-items-center gap-1" style="font-size: 11px;">
                                PARTICIPAR AHORA <i class="fa-solid fa-chevron-right" style="font-size: 9px;"></i>
                            </a>
                        </div>

                    </div>
                </aside>

                <!-- COLUMNA DERECHA: RESULTADOS DINÁMICOS (AJAX) -->
                <section class="col-lg-9">
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-secondary" style="font-size: 12px;">
                            Resultados dinámicos en tiempo real via Fetch API
                        </small>
                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1 small" style="font-size: 10px;">
                            <i class="fa-solid fa-circle text-primary me-1" style="font-size: 6px;"></i> EN TIEMPO REAL
                        </span>
                    </div>

                    <!-- AQUÍ SE INYECTAN LOS RESULTADOS DE JUEGOS DINÁMICAMENTE CON JS -->
                    <div id="resultados" class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 mb-4">
                        <!-- Las tarjetas se cargan automáticamente mediante js/app.js -->
                    </div>

                    <!-- ESTADÍSTICAS INFERIORES / METRICAS -->
                    <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-4 mt-4">
                        <div class="row align-items-center g-4 text-center text-md-start">
                            <div class="col-md-3">
                                <small class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px;">TENDENCIA SEMANAL</small>
                                <span class="fs-4 fw-bold text-white d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                                    <i class="fa-solid fa-gamepad text-primary fs-5"></i> +2.4k
                                </span>
                                <small class="text-secondary" style="font-size: 11px;">Usuarios buscando en tiempo real</small>
                            </div>
                            <div class="col-md-3">
                                <small class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px;">LANZAMIENTOS</small>
                                <span class="fs-4 fw-bold text-white d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                                    <i class="fa-regular fa-star text-primary fs-5"></i> 14
                                </span>
                                <small class="text-secondary" style="font-size: 11px;">Nuevos títulos agregados hoy</small>
                            </div>
                            <div class="col-md-3">
                                <small class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 10px;">COMUNIDAD</small>
                                <span class="fs-4 fw-bold text-white d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                                    <i class="fa-solid fa-trophy text-primary fs-5"></i> 100%
                                </span>
                                <small class="text-secondary" style="font-size: 11px;">Reseñas de expertos verificadas</small>
                            </div>
                            <div class="col-md-3 text-md-end">
                                <button type="button" class="btn btn-dark border border-secondary border-opacity-25 text-white rounded-3 small px-3 py-2">
                                    Ver estadísticas completas
                                </button>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </main>

    <!-- Enlazamos el script de Fetch API para que procese la búsqueda asincrónica -->
    <script src="js/app.js"></script>

<?php
require_once 'includes/footer.php';
?>