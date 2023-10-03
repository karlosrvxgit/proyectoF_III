<?php
session_start();

// Verificar si el usuario tiene el rol de maestro
if ($_SESSION['user_rol'] !== 'maestro') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Obtener el nombre de usuario del maestro desde la sesión (o cualquier otro criterio de autenticación)
$nombre_usuario = $_SESSION['user_nombre_usuario'];

// Obtener el ID del maestro basándose en el nombre de usuario
$stmt = $pdo->prepare("SELECT id FROM maestros WHERE nombre_usuario = ?");
$stmt->execute([$nombre_usuario]);
$maestro_id = $stmt->fetchColumn();

// Obtener los datos específicos del maestro desde la base de datos
$stmt = $pdo->prepare("SELECT maestros.id AS maestro_id, maestros.nombre AS maestro_nombre, clases.nombre AS clase_asignada 
                      FROM maestros_cursos 
                      INNER JOIN maestros ON maestros_cursos.id_maestro = maestros.id
                      INNER JOIN clases ON maestros_cursos.id_curso = clases.id
                      WHERE maestros.id = ?");
$stmt->execute([$maestro_id]);
$maestro_info = $stmt->fetch(PDO::FETCH_ASSOC);

// Obtener los datos de los alumnos asignados a la clase
$stmt = $pdo->prepare("SELECT nombre, apellidos FROM alumnos WHERE clase_asignada = ?");
$stmt->execute([$maestro_info['clase_asignada']]);
$alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Maestro</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $maestro_info['maestro_nombre']; ?>!</h1>

    <!-- Mostrar la clase asignada al maestro -->
    <h2>Clase Asignada:</h2>
    <p><?php echo $maestro_info['clase_asignada']; ?></p>

    <!-- Mostrar los datos de los alumnos -->
    <h2>Alumnos en la Clase:</h2>
    <ul>
        <?php foreach ($alumnos as $alumno) : ?>
            <li><?php echo $alumno['nombre'] . ' ' . $alumno['apellidos']; ?></li>
        <?php endforeach; ?>
    </ul>

    <br>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>



