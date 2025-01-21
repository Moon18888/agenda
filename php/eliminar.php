<?php
include '../php/verificar_sesion.php'; // Verifica la sesión
include '../php/conexion.php';

// Verificar si se recibió el email del contacto a eliminar
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Eliminar el contacto con el email recibido
    $query = "DELETE FROM contactos WHERE email = '$email'";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto eliminado correctamente.";
    } else {
        echo "Error al eliminar el contacto: " . $conexion->error;
    }

    echo "<br><a href='listar.php'>Volver a la lista de contactos</a>";
} else {
    echo "No se especificó un contacto para eliminar.";
}

$conexion->close();
?>


