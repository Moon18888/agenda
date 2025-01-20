<?php
include 'conexion.php';

// Verificar si se recibió el ID del contacto a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el contacto con el ID recibido
    $query = "DELETE FROM contactos WHERE id = $id";
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

