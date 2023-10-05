<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if($_SESSION["user_data"]["role_id"] !== 3) {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('../config/database.php'); // Configuración de la base de datos

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $clasesRegistradas = $_POST['clases_registradas'];

    // Insertar el nuevo alumno en la base de datos
    $stmt = $pdo->prepare("INSERT INTO alumnos (nombre, apellidos, clases_registradas) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $apellidos, $clasesRegistradas]);

    echo "Alumno creado exitosamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Alumno</title>
</head>
<body>
    <h1>Crear Alumno</h1>
    <!-- Formulario para crear un nuevo alumno -->
    <form action="crear_alumno.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label for="clases_registradas">Clases Registradas:</label>
        <input type="text" name="clases_registradas" required><br><br>

        <input type="submit" value="Crear Alumno">
    </form>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>
</html>
