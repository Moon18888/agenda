<?php
include 'conexion.php';

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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
</head>
<body>
    <h1>Editar Contacto</h1>
    <form method="POST" action="editar.php">
        <input type="hidden" name="id" value="<?php echo $contacto['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $contacto['nombre']; ?>" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $contacto['telefono']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $contacto['email']; ?>"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $contacto['direccion']; ?>"><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="listar.php">Volver a la lista de contactos</a>
</body>
</html>
