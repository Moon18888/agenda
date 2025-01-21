<?php
include '../php/verificar_sesion.php'; // Verifica la sesión
include '../php/conexion.php';

// Verificar si se recibió el email del contacto
if (isset($_GET['email'])) {
    $email = $conexion->real_escape_string($_GET['email']); // Escapar el email recibido

    // Obtener los datos del contacto a editar
    $query = "SELECT * FROM contactos WHERE email = '$email'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $contacto = $resultado->fetch_assoc(); // Cargar datos del contacto
    } else {
        echo "No se encontró el contacto con el email proporcionado.";
        echo "<br><a href='listar.php'>Volver a la lista de contactos</a>";
        exit;
    }
}

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $telefono = $conexion->real_escape_string($_POST['telefono']);
    $email_original = $conexion->real_escape_string($_POST['email_original']); // Email original
    $direccion = $conexion->real_escape_string($_POST['direccion']);

    // Actualizar los datos del contacto
    $query = "UPDATE contactos SET nombre='$nombre', telefono='$telefono', direccion='$direccion' WHERE email = '$email_original'";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto actualizado correctamente.";
        echo "<br><a href='../html/listar.php'>Volver a la lista de contactos</a>"; // Cambia la ruta a ../html/listar.php
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
    
}
?>



