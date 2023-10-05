<?php
session_start();

// Verificar si el usuario tiene el rol de administrador
if($_SESSION["user_data"]["role_id"] !== 3) {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('../config/database.php'); // Configuración de la base de datos

// Obtener la lista de clases desde la base de datos
$stmt = $pdo->prepare("SELECT materia_id, materia_nombre FROM materias");
$stmt->execute();
$materias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Listar Materias</title>
</head>

<body>
    <h1>Listar Materias</h1>

    <!-- Mostrar la lista de clases -->

    <?php if ($materias) : ?>
        <table border="1">
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Acciones</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($materias as $materia) : ?>
                    <tr>
                        <td><?php echo $materia['materia_nombre']; ?></td>
                        <td><a href="editar_materia.php?id=<?php echo $clase['id']; ?>">Editar</a></td>
                        <td><a href="borrar_materia.php?id=<?php echo $clase['id']; ?>">Eliminar</a></td>
                    <?php endforeach ?>
                    </tr>
            </tbody>
        </table>
    <?php else : ?>
        <p>No hay materias registradas.</p>
    <?php endif; ?>

    <br>
    <a href="admin_panel.php">Volver al Panel de Administrador</a>
</body>

</html>