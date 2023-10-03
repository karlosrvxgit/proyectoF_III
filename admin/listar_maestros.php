<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['user_rol'] !== 'admin') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Obtener la lista de maestros desde la base de datos
$stmt = $pdo->prepare("SELECT id, nombre, clases_asignadas FROM maestros");
$stmt->execute();
$maestros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Listar Maestros</title>
</head>

<body>
    <h1>Listar Maestros</h1>

    <!-- Mostrar la lista de maestros -->
    <?php if ($maestros) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Clases asignadas</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($maestros as $maestro) : ?>
                <tr>
                    <td><?php echo $maestro['id']; ?></td>
                    <td><?php echo $maestro['nombre']; ?></td>
                    <td><?php echo $maestro['clases_asignadas']; ?></td>
                    <td><a href="editar_maestro.php?id=<?php echo $maestro['id']; ?>">Editar</a></td>
                    <td><a href="borrar_maestro.php?id=<?php echo $maestro['id']; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No hay maestros registrados.</p>
    <?php endif; ?>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>


</body>

</html>