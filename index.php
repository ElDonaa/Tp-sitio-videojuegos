<?php
// Activar reporte de errores temporalmente para depurar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/Controllers/AuthController.php';

$controlador = new AuthController();
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';

switch ($accion) {
    case 'inicio':
        require_once 'app/Views/inicio.php';
        break;
    case 'login':
        $controlador->login();
        break;
    case 'registro':
        $controlador->registro();
        break;
    case 'logout':
        $controlador->logout();
        break;
    case 'juegos':
        require_once 'app/Views/juegos.php';
        break;
    case 'plataformas':
        require_once 'app/Views/plataformas.php';
        break;
    case 'noticias':
        require_once 'app/Views/noticias.php';
        break;
    case 'analisis':
        require_once 'app/Views/analisis.php';
        break;
    case 'comunidad':
        require_once 'app/Views/comunidad.php';
        break;
    case 'guias':
        require_once 'app/Views/guias.php';
        break;
    case 'contacto':
        require_once 'app/Views/contacto.php';
        break;
    case 'buscar':
        require_once 'app/Views/buscar.php';
        break;
    case 'perfil':
        require_once 'app/Views/perfil.php';
        break;
    default:
        require_once 'app/Views/inicio.php';
        break;
}
?>