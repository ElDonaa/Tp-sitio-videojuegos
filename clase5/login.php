<?php
$titulo_pagina = "Iniciar Sesión - GAMEZONE";

require_once 'conexion.php';
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Buscar el usuario en la base de datos por su correo
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    // Validar contraseña usando password_verify (Requisito TP8)
    if ($usuario && password_verify($password, $usuario['password'])) {
        // Mitigar ataques de fijación de sesión
        session_regenerate_id(true);

        // Guardar datos clave en la superglobal $_SESSION utilizando las columnas reales
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        $_SESSION['usuario_nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['id_rol'];

        // Redirigir al inicio o panel principal
        header("Location: index.php");
        exit();
    } else {
        $error = "Correo electrónico o contraseña incorrectos.";
    }
}

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

                        <!-- AVISO DE REGISTRO EXITOSO -->
                        <?php if(isset($_GET['registro']) && $_GET['registro'] == 'exitoso'): ?>
                            <div class="alert alert-success py-2 small mb-4">
                                <i class="fa-solid fa-check-circle me-1"></i> ¡Registro exitoso! Ya puedes iniciar sesión.
                            </div>
                        <?php endif; ?>

                        <!-- ALERTA DE ERROR -->
                        <?php if(!empty($error)): ?>
                            <div class="alert alert-danger py-2 small mb-4">
                                <i class="fa-solid fa-triangle-exclamation me-1"></i> <?php echo $error; ?>
                            </div>
                        <?php endif; ?>

                        <!-- FORMULARIO DE LOGIN -->
                        <form action="login.php" method="POST" class="d-flex flex-column gap-3">
                            
                            <!-- Correo Electrónico -->
                            <div>
                                <label for="login-email" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CORREO ELECTRÓNICO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="email" id="login-email" name="email" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="ejemplo@gamezone.com" required>
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
                                    <input type="password" id="login-password" name="password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
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
                            <a href="registro.php" class="text-primary fw-bold text-decoration-none small ms-1">Regístrate aquí</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>

<?php
require_once 'includes/footer.php';
?>