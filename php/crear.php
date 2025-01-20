<?php
include '../php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO contactos (nombre, telefono, email, direccion) VALUES ('$nombre', '$telefono', '$email', '$direccion')";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto agregado correctamente.";
        echo "<br><a href='listar.php'>Volver a la lista de contactos</a>";
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
}
?>


