<?php
session_start();

// Destruir la sesión actual
session_destroy();

// Redirigir al usuario a la página de inicio de sesión (login.html)
header('Location: /login/login.php');
exit;
?>
