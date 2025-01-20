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
