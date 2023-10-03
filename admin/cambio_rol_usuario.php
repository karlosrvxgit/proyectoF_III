<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['user_rol'] !== 'admin') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_POST['usuario_id'];
    $nuevo_rol = $_POST['nuevo_rol'];

    // Actualizar el rol del usuario en la base de datos
    $stmt = $pdo->prepare("UPDATE usuarios SET rol = ? WHERE id = ?");
    $stmt->execute([$nuevo_rol, $usuario_id]);

    echo "Rol del usuario actualizado correctamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cambiar Rol de Usuario</title>
</head>
<body>
    <h1>Cambiar Rol de Usuario</h1>
    <!-- Formulario para cambiar el rol del usuario -->
    <form action="cambio_rol_usuario.php" method="POST">
        <label for="usuario_id">ID del Usuario:</label>
        <input type="text" name="usuario_id" required><br><br>

        <label for="nuevo_rol">Nuevo Rol:</label>
        <select name="nuevo_rol">
            <option value="admin">Admin</option>
            <option value="maestro">Maestro</option>
            <option value="alumno">Alumno</option>
        </select><br><br>

        <input type="submit" value="Cambiar Rol">
    </form>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>
</html>
