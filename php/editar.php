<?php
include '../php/conexion.php';


// Verificar si se recibió el ID del contacto
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del contacto a editar
    $query = "SELECT * FROM contactos WHERE id = $id";
    $resultado = $conexion->query($query);
    $contacto = $resultado->fetch_assoc();
}

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    // Actualizar los datos del contacto
    $query = "UPDATE contactos SET nombre='$nombre', telefono='$telefono', email='$email', direccion='$direccion' WHERE id = $id";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto actualizado correctamente.";
        echo "<br><a href='listar.php'>Volver a la lista de contactos</a>";
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
}
?>
