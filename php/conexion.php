<?php

$host = "localhost";
$user = "root";
$password = "Syntax2024_";
$database = "agenda";

$conexion = new mysqli($host, $user, $password, $database);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
