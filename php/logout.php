<?php
session_start();
session_destroy(); // Destruye todas las variables de sesión
header("Location: ../html/login.php"); // Redirige al formulario de login
exit;
?>
