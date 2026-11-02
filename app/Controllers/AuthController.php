<?php
require_once __DIR__ . '/../Models/UsuarioModel.php';

class AuthController {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    // Manejar el inicio de sesión
    public function login() {
        $error = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $usuario = $this->model->obtenerPorEmail($email);

            if ($usuario && password_verify($password, $usuario['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                session_regenerate_id(true);

                $_SESSION['usuario_id'] = $usuario['id_usuario'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];
                $_SESSION['rol'] = $usuario['id_rol'];

                header("Location: index.php");
                exit();
            } else {
                $error = "Correo electrónico o contraseña incorrectos.";
            }
        }

        // Cargar la vista de login pasando el error si lo hay
        require_once __DIR__ . '/../Views/login.php';
    }

    // Manejar el registro de usuarios
    public function registro() {
        $mensaje = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($password !== $confirm_password) {
                $mensaje = "Las contraseñas no coinciden.";
            } else {
                $existe = $this->model->obtenerPorEmail($email);
                if ($existe) {
                    $mensaje = "El correo electrónico ya está registrado.";
                } else {
                    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                    if ($this->model->registrar($nombre, $email, $passwordHash)) {
                        header("Location: login.php?registro=exitoso");
                        exit();
                    } else {
                        $mensaje = "Error al registrar el usuario en la base de datos.";
                    }
                }
            }
        }

        // Cargar la vista de registro
        require_once __DIR__ . '/../Views/registro.php';
    }

    // Cerrar sesión
   public function logout() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION = array();
    session_destroy();

    // Redirección relativa correcta al index.php de la misma carpeta
    header("Location: index.php?accion=inicio");
    exit();
}
}
?>