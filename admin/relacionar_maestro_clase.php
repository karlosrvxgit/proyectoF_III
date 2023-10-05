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
    $maestro_id = $_POST['maestro_id'];
    $clase_id = $_POST['clase_id'];

    // Insertar la relación maestro-clase en la base de datos
    $stmt = $pdo->prepare("INSERT INTO maestros_cursos (id_maestro, id_curso) VALUES (?, ?)");
    $stmt->execute([$maestro_id, $clase_id]);

    echo "Relación establecida exitosamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Relacionar Maestro a Clase</title>
</head>
<body>
    <h1>Relacionar Maestro a Clase</h1>
    <!-- Formulario para relacionar maestro a clase -->
    <form action="relacionar_maestro_clase.php" method="POST">
        <label for="maestro_id">ID del Maestro:</label>
        <input type="text" name="maestro_id" required><br><br>

        <label for="clase_id">ID de la Clase:</label>
        <input type="text" name="clase_id" required><br><br>

        <input type="submit" value="Relacionar Maestro a Clase">
    </form>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>
</html>

