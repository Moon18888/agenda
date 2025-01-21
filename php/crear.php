<?php
include '../php/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $direccion = trim($_POST['direccion']);

    // Validar que los campos obligatorios no estén vacíos
    if (empty($nombre) || empty($email)) {
        echo "Error: Los campos 'Nombre' y 'Email' son obligatorios.";
        echo "<br><a href='../html/crear.php'>Volver al formulario</a>";
        exit;
    }

    // Inserción de los datos en la tabla
    $query = "INSERT INTO contactos (nombre, telefono, email, direccion) VALUES ('$nombre', '$telefono', '$email', '$direccion')";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto agregado correctamente.";
        echo "<br><a href='../html/listar.php'>Volver a la lista de contactos</a>";    } else {
        if ($conexion->errno == 1062) { // Error por duplicado
            echo "Error: El correo ya está registrado. Por favor intenta nuevamente.";
        } else {
            echo "Error: " . $conexion->error;
        }
        echo "<br><a href='listar.php'>Volver a la lista de contactos</a>";
    }
}
?>



