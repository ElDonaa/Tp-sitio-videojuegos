<?php
$titulo_pagina = "contacto - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- SECCIÓN DE CONTACTO PRINCIPAL -->
    <main class="py-5">
        <div class="container py-3">
            
            <!-- ENCABEZADO DE LA SECCIÓN -->
            <div class="mb-5">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="bg-primary bg-opacity-25 p-2 rounded-3 text-primary d-inline-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-envelope fs-5"></i>
                    </div>
                    <h1 class="fw-bold mb-0 text-uppercase tracking-wider">CONTACTO</h1>
                </div>
                <p class="text-secondary mb-0" style="max-width: 600px;">
                    ¿Tienes alguna duda o sugerencia? ¡Escríbenos! Nuestro equipo de soporte está listo para ayudarte con cualquier consulta técnica o general sobre GAMEZONE.
                </p>
            </div>

            <div class="row g-5">
                
                <!-- COLUMNA IZQUIERDA: FORMULARIO -->
                <div class="col-lg-6">
                    <form>
                        <!-- NOMBRE -->
                        <div class="mb-4">
                            <label for="nombre" class="form-label text-uppercase fw-bold text-white small" style="font-size: 11px; letter-spacing: 0.5px;">NOMBRE</label>
                            <div class="input-group bg-card border border-secondary border-opacity-25 rounded-3 overflow-hidden">
                                <span class="input-group-text bg-transparent border-0 text-secondary">
                                    <i class="fa-regular fa-user"></i>
                                </span>
                                <input type="text" id="nombre" class="form-control bg-transparent border-0 text-white shadow-none py-2" placeholder="Tu nombre completo">
                            </div>
                        </div>

                        <!-- CORREO ELECTRÓNICO -->
                        <div class="mb-4">
                            <label for="email" class="form-label text-uppercase fw-bold text-white small" style="font-size: 11px; letter-spacing: 0.5px;">CORREO ELECTRÓNICO</label>
                            <div class="input-group bg-card border border-secondary border-opacity-25 rounded-3 overflow-hidden">
                                <span class="input-group-text bg-transparent border-0 text-secondary">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <input type="email" id="email" class="form-control bg-transparent border-0 text-white shadow-none py-2" placeholder="tu@email.com">
                            </div>
                        </div>

                        <!-- MENSAJE -->
                        <div class="mb-4">
                            <label for="mensaje" class="form-label text-uppercase fw-bold text-white small" style="font-size: 11px; letter-spacing: 0.5px;">MENSAJE</label>
                            <div class="input-group bg-card border border-secondary border-opacity-25 rounded-3 overflow-hidden">
                                <span class="input-group-text bg-transparent border-0 text-secondary align-items-start pt-2">
                                    <i class="fa-regular fa-comment"></i>
                                </span>
                                <textarea id="mensaje" class="form-control bg-transparent border-0 text-white shadow-none py-2" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                            </div>
                        </div>

                        <!-- BOTÓN ENVIAR -->
                        <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2">
                            ENVIAR MENSAJE <i class="fa-regular fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- COLUMNA DERECHA: TARJETA + REDES Y AYUDA -->
                <div class="col-lg-6">
                    
                    <!-- TARJETA CON IMAGEN DE CONTROL NEÓN -->
                    <div class="position-relative rounded-4 overflow-hidden mb-4 border border-secondary border-opacity-25 d-flex align-items-end" style="height: 320px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent), url('img/Plataformas.png') center/cover no-repeat;">
                        <div class="p-3 w-100">
                            <div class="bg-dark bg-opacity-75 border border-secondary border-opacity-25 rounded-3 p-3 d-flex align-items-center gap-3 backdrop-blur">
                                <div class="bg-primary p-2 rounded-3 text-white">
                                    <i class="fa-solid fa-gamepad"></i>
                                </div>
                                <div>
                                    <small class="text-uppercase text-secondary fw-semibold d-block" style="font-size: 10px;">SOPORTE TÉCNICO</small>
                                    <span class="fw-bold small text-white text-uppercase">ASISTENCIA 24/7 PARA MIEMBROS</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAMBIÉN PUEDES ENCONTRARNOS EN -->
                    <h6 class="fw-bold text-white mb-3" style="font-size: 14px;">También puedes encontrarnos en:</h6>

                    <!-- BOTONES DE REDES SOCIALES (GRID 4 COLUMNAS) -->
                    <div class="row row-cols-2 row-cols-sm-4 g-2 mb-3">
                        <div class="col">
                            <a href="#" class="btn bg-card border border-secondary border-opacity-25 w-100 py-3 text-white rounded-3 d-flex flex-column align-items-center gap-2 text-decoration-none hover-card">
                                <i class="fa-brands fa-instagram fs-4"></i>
                                <span class="fw-bold text-uppercase" style="font-size: 9px; letter-spacing: 0.5px;">INSTAGRAM</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn bg-card border border-secondary border-opacity-25 w-100 py-3 text-white rounded-3 d-flex flex-column align-items-center gap-2 text-decoration-none hover-card">
                                <i class="fa-brands fa-x-twitter fs-4"></i>
                                <span class="fw-bold text-uppercase" style="font-size: 9px; letter-spacing: 0.5px;">TWITTER</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn bg-card border border-secondary border-opacity-25 w-100 py-3 text-white rounded-3 d-flex flex-column align-items-center gap-2 text-decoration-none hover-card">
                                <i class="fa-brands fa-facebook-f fs-4"></i>
                                <span class="fw-bold text-uppercase" style="font-size: 9px; letter-spacing: 0.5px;">FACEBOOK</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn bg-card border border-secondary border-opacity-25 w-100 py-3 text-white rounded-3 d-flex flex-column align-items-center gap-2 text-decoration-none hover-card">
                                <i class="fa-brands fa-youtube fs-4"></i>
                                <span class="fw-bold text-uppercase" style="font-size: 9px; letter-spacing: 0.5px;">YOUTUBE</span>
                            </a>
                        </div>
                    </div>

                    <!-- EMAIL DIRECTO Y CENTRO DE AYUDA -->
                    <div class="row g-2">
                        <div class="col-sm-6">
                            <div class="bg-card border border-secondary border-opacity-25 p-3 rounded-3 d-flex align-items-center gap-3">
                                <i class="fa-regular fa-envelope text-primary fs-5"></i>
                                <div>
                                    <span class="fw-bold d-block text-uppercase" style="font-size: 11px;">EMAIL DIRECTO</span>
                                    <small class="text-secondary" style="font-size: 11px;">soporte@gamezone.com</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-card border border-secondary border-opacity-25 p-3 rounded-3 d-flex align-items-center gap-3">
                                <i class="fa-regular fa-circle-question text-primary fs-5"></i>
                                <div>
                                    <span class="fw-bold d-block text-uppercase" style="font-size: 11px;">CENTRO DE AYUDA</span>
                                    <small class="text-secondary" style="font-size: 11px;">Preguntas Frecuentes</small>
                                </div>
                            </div>
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