<?php
$titulo_pagina = "registro - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- SECCIÓN PRINCIPAL: CREAR CUENTA -->
    <main class="my-auto py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    
                    <!-- TARJETA DEL FORMULARIO -->
                    <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-4 p-md-5 shadow-lg">
                        
                        <!-- ENCABEZADO -->
                        <div class="text-center mb-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 56px; height: 56px;">
                                <i class="fa-solid fa-user-plus fs-4"></i>
                            </div>
                            <h1 class="h3 fw-bold text-white mb-1">Únete a GAMEZONE</h1>
                            <p class="text-secondary small mb-0">Crea tu cuenta gamer y accede a estadísticas, comunidad y análisis exclusivos.</p>
                        </div>

                        <!-- REGISTRO RÁPIDO CON REDES / PLATAFORMAS -->
                        <div class="d-flex gap-2 mb-4">
                            <button type="button" class="btn btn-dark border border-secondary border-opacity-25 text-white flex-fill d-flex align-items-center justify-content-center gap-2 py-2 small">
                                <i class="fa-brands fa-google text-danger"></i> Google
                            </button>
                            <button type="button" class="btn btn-dark border border-secondary border-opacity-25 text-white flex-fill d-flex align-items-center justify-content-center gap-2 py-2 small">
                                <i class="fa-brands fa-discord text-primary"></i> Discord
                            </button>
                            <button type="button" class="btn btn-dark border border-secondary border-opacity-25 text-white flex-fill d-flex align-items-center justify-content-center gap-2 py-2 small">
                                <i class="fa-brands fa-steam text-light"></i> Steam
                            </button>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <hr class="flex-grow-1 border-secondary border-opacity-25 my-0">
                            <span class="px-3 text-secondary" style="font-size: 11px;">O REGÍSTRATE CON TU EMAIL</span>
                            <hr class="flex-grow-1 border-secondary border-opacity-25 my-0">
                        </div>

                        <!-- FORMULARIO DE REGISTRO -->
                        <form action="#" method="POST" class="d-flex flex-column gap-3">
                            
                            <!-- Nombre Completo -->
                            <div>
                                <label for="nombre" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">NOMBRE COMPLETO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-user"></i></span>
                                    <input type="text" id="nombre" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="Ej. Juan Pérez" required>
                                </div>
                            </div>

                            <!-- Nombre de Usuario / GamerTag -->
                            <div>
                                <label for="gamertag" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">GAMERTAG / USUARIO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-at"></i></span>
                                    <input type="text" id="gamertag" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="Ej. GamerPro_99" required>
                                </div>
                            </div>

                            <!-- Correo Electrónico -->
                            <div>
                                <label for="email" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CORREO ELECTRÓNICO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="email" id="email" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="ejemplo@gamezone.com" required>
                                </div>
                            </div>

                            <!-- Selección de Plataforma Principal -->
                            <div>
                                <label for="plataforma" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">PLATAFORMA PRINCIPAL</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-gamepad"></i></span>
                                    <select id="plataforma" class="form-select bg-dark border-secondary border-opacity-25 text-white">
                                        <option value="" selected disabled>Selecciona tu plataforma</option>
                                        <option value="pc">PC Gamer</option>
                                        <option value="ps5">PlayStation 5</option>
                                        <option value="xbox">Xbox Series X/S</option>
                                        <option value="switch">Nintendo Switch</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Contraseña -->
                            <div>
                                <label for="password" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CONTRASEÑA</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" id="password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
                                </div>
                            </div>

                            <!-- Confirmar Contraseña -->
                            <div>
                                <label for="confirm_password" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CONFIRMAR CONTRASEÑA</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-shield-halved"></i></span>
                                    <input type="password" id="confirm_password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
                                </div>
                            </div>

                            <!-- Términos y Condiciones -->
                            <div class="form-check mt-2">
                                <input class="form-check-input bg-dark border-secondary border-opacity-25" type="checkbox" id="terminos" required>
                                <label class="form-check-label text-secondary small" for="terminos">
                                    Acepto los <a href="#" class="text-primary text-decoration-none">Términos de Servicio</a> y la <a href="#" class="text-primary text-decoration-none">Política de Privacidad</a>.
                                </label>
                            </div>

                            <!-- Botón Submit -->
                            <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold rounded-3 mt-2">
                                Crear mi Cuenta
                            </button>
                        </form>

                        <!-- ENLACE A LOGIN -->
                        <div class="text-center mt-4 pt-2 border-top border-secondary border-opacity-25">
                            <span class="text-secondary small">¿Ya tienes una cuenta?</span>
                            <a href="login.html" class="text-primary fw-bold text-decoration-none small ms-1">Inicia sesión aquí</a>
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