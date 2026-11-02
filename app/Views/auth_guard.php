<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Si el usuario no está autenticado, redirige al login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php?error=acceso_denegado");
    exit();
}
?>