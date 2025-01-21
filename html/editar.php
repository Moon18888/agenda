<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
</head>
<body>
    <h1>Editar Contacto</h1>
    <?php
    include '../php/editar.php';
    ?>

    <!-- Formulario para editar contacto -->
    <form method="POST" action="../php/editar.php">
        <input type="hidden" name="email_original" value="<?php echo htmlspecialchars($contacto['email']); ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($contacto['nombre']); ?>" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($contacto['telefono']); ?>"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo htmlspecialchars($contacto['direccion']); ?>"><br><br>

        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="listar.php">Volver a la lista de contactos</a>
</body>
</html>




