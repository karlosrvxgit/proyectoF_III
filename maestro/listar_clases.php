<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['user_rol'] !== 'admin') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Obtener la lista de clases desde la base de datos
$stmt = $pdo->prepare("SELECT id, nombre FROM clases");
$stmt->execute();
$clases = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Listar Clases</title>
</head>

<body>
    <h1>Listar Clases</h1>

    <!-- Mostrar la lista de clases -->

    <?php if ($clases) : ?>
        <table border="1">
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Acciones</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($clases as $clase) : ?>
                    <tr>
                        <td><?php echo $clase['nombre']; ?></td>
                        <td><a href="editar_clase.php?id=<?php echo $clase['id']; ?>">Editar</a></td>
                        <td><a href="borrar_clase.php?id=<?php echo $clase['id']; ?>">Eliminar</a></td>
                    <?php endforeach ?>
                    </tr>
            </tbody>
        </table>
    <?php else : ?>
        <p>No hay clases registradas.</p>
    <?php endif; ?>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>

</html>