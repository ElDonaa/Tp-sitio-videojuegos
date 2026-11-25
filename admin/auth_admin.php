<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica sesión iniciada y rol de administrador (id_rol = 1)
if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['rol']) || (int)$_SESSION['rol'] !== 1) {
    header("Location: ../index.php?error=sin_permisos");
    exit();
}