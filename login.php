<?php
$titulo_pagina = "login - GAMEZONE";
require_once 'includes/header.php';
?>

    <!-- SECCIÓN PRINCIPAL: INICIAR SESIÓN -->
    <main class="my-auto py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    
                    <!-- TARJETA DEL FORMULARIO -->
                    <div class="bg-card border border-secondary border-opacity-25 rounded-4 p-4 p-md-5 shadow-lg">
                        
                        <!-- ENCABEZADO -->
                        <div class="text-center mb-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 56px; height: 56px;">
                                <i class="fa-solid fa-right-to-bracket fs-4"></i>
                            </div>
                            <h1 class="h3 fw-bold text-white mb-1">¡Hola de nuevo!</h1>
                            <p class="text-secondary small mb-0">Ingresa a tu cuenta para continuar en GAMEZONE.</p>
                        </div>

                        <!-- ACCESO RÁPIDO -->
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
                            <span class="px-3 text-secondary" style="font-size: 11px;">O INGRESA CON TU CORREO</span>
                            <hr class="flex-grow-1 border-secondary border-opacity-25 my-0">
                        </div>

                        <!-- FORMULARIO DE LOGIN -->
                        <form action="perfil.html" method="GET" class="d-flex flex-column gap-3">
                            
                            <!-- Correo o Usuario -->
                            <div>
                                <label for="login-email" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CORREO O GAMERTAG</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="text" id="login-email" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="ejemplo@gamezone.com o GamerTag" required>
                                </div>
                            </div>

                            <!-- Contraseña -->
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <label for="login-password" class="form-label text-secondary fw-semibold mb-0" style="font-size: 11px; letter-spacing: 0.5px;">CONTRASEÑA</label>
                                    <a href="#" class="text-primary text-decoration-none" style="font-size: 11px;">¿Olvidaste tu contraseña?</a>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" id="login-password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
                                </div>
                            </div>

                            <!-- Recordarme -->
                            <div class="form-check mt-1">
                                <input class="form-check-input bg-dark border-secondary border-opacity-25" type="checkbox" id="remember-me">
                                <label class="form-check-label text-secondary small" for="remember-me">
                                    Recordar mis datos en este equipo
                                </label>
                            </div>

                            <!-- Botón Submit -->
                            <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold rounded-3 mt-2">
                                Iniciar Sesión
                            </button>
                        </form>

                        <!-- ENLACE A REGISTRO -->
                        <div class="text-center mt-4 pt-3 border-top border-secondary border-opacity-25">
                            <span class="text-secondary small">¿Aún no tienes una cuenta?</span>
                            <a href="registro.html" class="text-primary fw-bold text-decoration-none small ms-1">Regístrate aquí</a>
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