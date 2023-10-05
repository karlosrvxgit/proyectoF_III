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
    $clasesAsignadas = $_POST['clases_asignadas'];
    

    // Insertar el nuevo maestro en la base de datos
    $stmt = $pdo->prepare("INSERT INTO maestros (nombre, clases_asignadas) VALUES (?, ?)");
    $stmt->execute([$nombre, $clasesAsignadas]);
    


    echo "Maestro creado exitosamente.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Crear Maestro</title>
</head>

<body>
    <h1>Crear Maestro</h1>
    <!-- Formulario para crear un nuevo maestro -->
    <form action="../admin/crear_maestro.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="text">Clases asignadas:</label>
        <input type="text" name="clases_asignadas" required><br><br>

        <input type="submit" value="Crear Maestro">
    </form>

    <br>
    <a href="../admin/admin_panel.php">Volver al Panel de Administrador</a>
</body>

</html>