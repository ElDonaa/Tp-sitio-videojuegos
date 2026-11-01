<?php
$titulo_pagina = "Registro - GAMEZONE";

// 1. Incluimos la conexión a la base de datos
require_once 'conexion.php';

$mensaje = "";

// 2. Procesamos el formulario cuando el usuario presiona "Crear mi Cuenta"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $id_rol = 2; // ID por defecto para usuario común en tu tabla roles (ajusta si es necesario)

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        $mensaje = "Las contraseñas no coinciden.";
    } else {
        // Verificar si el correo electrónico ya existe en la BD usando id_usuario
        $sql_check = "SELECT id_usuario FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql_check);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $mensaje = "El correo electrónico ya está registrado.";
        } else {
            // Encriptar la contraseña de forma segura (Requisito OWASP del TP8)
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            // Insertar usuario usando consultas preparadas PDO con id_rol
            $sql = "INSERT INTO usuarios (nombre, email, password, id_rol) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            
            if ($stmt->execute([$nombre, $email, $passwordHash, $id_rol])) {
                // Redirigir al login con aviso de éxito
                header("Location: login.php?registro=exitoso");
                exit();
            } else {
                $mensaje = "Error al registrar el usuario en la base de datos.";
            }
        }
    }
}

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

                        <!-- ALERTA DE ERROR SI LA HAY -->
                        <?php if(!empty($mensaje)): ?>
                            <div class="alert alert-danger py-2 small mb-4">
                                <i class="fa-solid fa-triangle-exclamation me-1"></i> <?php echo $mensaje; ?>
                            </div>
                        <?php endif; ?>

                        <!-- FORMULARIO DE REGISTRO -->
                        <form action="registro.php" method="POST" class="d-flex flex-column gap-3">
                            
                            <!-- Nombre Completo -->
                            <div>
                                <label for="nombre" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">NOMBRE COMPLETO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-user"></i></span>
                                    <input type="text" id="nombre" name="nombre" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="Ej. Juan Pérez" required>
                                </div>
                            </div>

                            <!-- Correo Electrónico -->
                            <div>
                                <label for="email" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CORREO ELECTRÓNICO</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="ejemplo@gamezone.com" required>
                                </div>
                            </div>

                            <!-- Contraseña -->
                            <div>
                                <label for="password" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CONTRASEÑA</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" id="password" name="password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
                                </div>
                            </div>

                            <!-- Confirmar Contraseña -->
                            <div>
                                <label for="confirm_password" class="form-label text-secondary fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.5px;">CONFIRMAR CONTRASEÑA</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary border-opacity-25 text-secondary"><i class="fa-solid fa-shield-halved"></i></span>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control bg-dark border-secondary border-opacity-25 text-white" placeholder="••••••••" required>
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
                            <a href="login.php" class="text-primary fw-bold text-decoration-none small ms-1">Inicia sesión aquí</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>

<?php
require_once 'includes/footer.php';
?>