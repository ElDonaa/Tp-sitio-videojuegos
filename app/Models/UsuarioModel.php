<?php
require_once __DIR__ . '/../../config/conexion.php';

class UsuarioModel {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    // Buscar un usuario por su correo electrónico
    public function obtenerPorEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Registrar un nuevo usuario en la base de datos
    public function registrar($nombre, $email, $passwordHash, $id_rol = 2) {
        $sql = "INSERT INTO usuarios (nombre, email, password, id_rol) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nombre, $email, $passwordHash, $id_rol]);
    }
}
?>