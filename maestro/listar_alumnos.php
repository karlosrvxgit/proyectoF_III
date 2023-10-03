<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['user_rol'] !== 'admin') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Obtener la lista de alumnos desde la base de datos
$stmt = $pdo->prepare("SELECT id, nombre, apellidos, clases_registradas FROM alumnos");
// $stmt = $pdo->prepare("SELECT id, nombre, email, telefono FROM alumnos");
$stmt->execute();
$alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listar Alumnos</title>
</head>
<body>
    <h1>Listar Alumnos</h1>

    <!-- Mostrar la lista de alumnos -->
    <?php if ($alumnos) : ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Clases_registradas</th>
                <th>Acción</th>
            </tr>
            <?php foreach ($alumnos as $alumno) : ?>
                <tr>
                    <td><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td><?php echo $alumno['apellidos']; ?></td>
                    <td><?php echo $alumno['clases_registradas']; ?></td>
                    <td><a href="editar_alumno.php?id=<?php echo $alumno['id']; ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No hay alumnos registrados.</p>
    <?php endif; ?>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>
</html>
