<?php
include '../php/conexion.php';

$query = "SELECT * FROM contactos";
$resultado = $conexion->query($query);

//echo "<h1>Lista de Contactos</h1>";

// Botón para agregar un nuevo contacto
echo "<a href='crear.php' style='display: inline-block; margin-bottom: 15px; padding: 10px 15px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;'>Agregar Contacto</a>";

if ($resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Email</th><th>Dirección</th><th>Acciones</th></tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td><a href='editar.php?id=" . $fila['id'] . "'>Editar</a> | <a href='eliminar.php?id=" . $fila['id'] . "' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este contacto?\")'>Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay contactos registrados.";
}

$conexion->close();
?>

