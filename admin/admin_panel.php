<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['user_rol'] !== 'admin') {
    header('Location: acceso_denegado.php');
    exit;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administrador</title>
</head>
<body>
    <h1>Bienvenido al Panel de Administrador</h1>

    <!-- Funcionalidades para el administrador -->
    <h2>Gestión de Maestros</h2>
    <a href="crear_maestro.php">Crear Maestro</a>
    <a href="listar_maestros.php">Listar Maestros</a>

    <h2>Gestión de Alumnos</h2>
    <a href="crear_alumno.php">Crear Alumno</a>
    <a href="listar_alumnos.php">Listar Alumnos</a>

    <h2>Gestión de Clases</h2>
    <a href="crear_clase.php">Crear Clase</a>
    <a href="listar_clases.php">Listar Clases</a>

    <h2>Relacionar Maestro y Clase</h2>
    <a href="relacionar_maestro_clase.php">Relacionar Maestro y Clase</a>

    <h2>Cambio de Rol de Usuario</h2>
    <a href="cambio_rol_usuario.php">Cambiar Rol de Usuario</a>

    <br>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>

