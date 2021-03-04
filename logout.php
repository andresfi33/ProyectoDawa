<?php
//Utilizar las sesiones.
session_start();
//Eliminar sesión actual.
session_destroy();
//Redireccionar a la página de login.
header("Location: index.php");
?>