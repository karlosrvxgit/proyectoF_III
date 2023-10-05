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

    // Insertar la nueva clase en la base de datos
    $stmt = $pdo->prepare("INSERT INTO materias (materia_nombre) VALUES (?)");
    $stmt->execute([$nombre]);

    echo "Materia creada exitosamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Materia</title>
</head>
<body>
    <h1>Crear Materia</h1>
    <!-- Formulario para crear una nueva clase -->
    <form action="crear_materia.php" method="POST">
        <label for="nombre">Nombre de la Materia:</label>
        <input type="text" name="nombre" required><br><br>

        <input type="submit" value="Crear Materia">
    </form>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>
</html>
