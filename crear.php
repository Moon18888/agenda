<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO contactos (nombre, telefono, email, direccion) VALUES ('$nombre', '$telefono', '$email', '$direccion')";
    if ($conexion->query($query) === TRUE) {
        echo "Contacto agregado correctamente.";
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
</head>
<body>
    <h1>Agregar Contacto</h1>
    <form method="POST" action="crear.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion"><br><br>

        <button type="submit">Agregar</button>
    </form>
    <br>
    <a href="listar.php">Volver a la lista de contactos</a>
</body>
</html>
