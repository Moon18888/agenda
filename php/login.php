<?php
include 'conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($conexion->real_escape_string($_POST['username']));
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: ../html/login.php?error=Usuario o contraseña no pueden estar vacíos");
        exit;
    }

    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Comparar contraseñas
        $hashed_password = hash('sha256', $password); // Usa SHA2
        if ($usuario['password'] === $hashed_password) {
            $_SESSION['usuario'] = $username;
            error_log("Inicio de sesión exitoso para $username");
            header("Location: ../html/listar.php");
            exit;
        } else {
            error_log("Contraseña incorrecta para $username");
            header("Location: ../html/login.php?error=Usuario o contraseña incorecta ");
            exit;
        }
    } else {
        error_log("Usuario $username no encontrado");
        header("Location: ../html/login.php?error=Usuario o contraseña incorecta");
        exit;
    }
} else {
    echo "Método no permitido.";
    exit;
}
?>


