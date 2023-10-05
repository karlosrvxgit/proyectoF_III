<?php
// session_start();

// Verificar si el usuario tiene el rol de maestro
if($_SESSION["user_data"]["role_id"] !== 4) {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('../config/database.php'); // Configuración de la base de datos

// Obtener la ID del maestro desde la sesión
$maestro_id = $_SESSION['user_data'];

// Consultar la clase asignada al maestro
$stmt = $pdo->prepare("SELECT m.materia_nombre AS materia_nombre FROM materias m 
                       JOIN maestros_cursos mm ON m.id = mm.id_materia
                       WHERE mm.id_maestro = ?");
$stmt->execute([$maestro_id]);
$materia = $stmt->fetch(PDO::FETCH_ASSOC);

// Consultar la lista de alumnos en la clase asignada al maestro
if ($materia) {
    $materia_id = $materia['id'];
    $stmt = $pdo->prepare("SELECT a.nombre AS alumno_nombre FROM alumnos a
                           JOIN alumnos_clases ac ON a.id = ac.id_alumno
                           WHERE ac.id_clase = ?");
    $stmt->execute([$clase_id]);
    $alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Resto del código de la página de maestro
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel de Maestro</title>
</head>
<body>
    <h1>Bienvenido al Panel de Maestro</h1>

    <!-- Mostrar la clase asignada -->
    <h2>Clase Asignada</h2>
    <?php
    if ($clase) {
        echo "<p>Tu clase asignada es: " . $clase['clase_nombre'] . "</p>";
    } else {
        echo "<p>No estás asignado a ninguna clase.</p>";
    }
    ?>

    <!-- Mostrar la lista de alumnos -->
    <h2>Lista de Alumnos</h2>
    <?php
    if ($alumnos) {
        echo "<ul>";
        foreach ($alumnos as $alumno) {
            echo "<li>" . $alumno['alumno_nombre'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay alumnos en esta clase.</p>";
    }
    ?>

    <br>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>



