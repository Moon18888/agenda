<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
</head>
<body>
    <h1>Agregar Contacto</h1>
    <form method="POST" action="../php/crear.php">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="telefono" placeholder="Teléfono"><br>
        <input type="email" name="email" placeholder="Correo Electrónico"><br>
        <textarea name="direccion" placeholder="Dirección"></textarea><br>
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>
