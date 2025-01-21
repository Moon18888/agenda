<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
</head>
<body>

    <?php include '../php/listar.php'; ?>
    <form method="POST" action="../php/logout.php" style="float: right;">
        <button type="submit" style="background-color: #f44336; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
            Cerrar Sesión
        </button>
    </form>


</body>
</html>
