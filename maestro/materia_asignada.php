<?php
session_start();

// Verificar si el usuario tiene el rol de maestro
if (!isset($_SESSION["user_data"]) || $_SESSION["user_data"]["role_id"] !== 4) {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('../config/database.php'); // Configuración de la base de datos

// Obtener la ID del maestro desde la sesión
$maestro_id = $_SESSION['user_data']['id'];

// Consultar la materia asignada al maestro
$stmt = $pdo->prepare("SELECT m.materia_nombre FROM materias m 
                       JOIN maestros_cursos mm ON m.materia_id = mm.id_curso
                       WHERE mm.id_maestro = ?");
$stmt->execute([$maestro_id]);
$materia = $stmt->fetch(PDO::FETCH_ASSOC);

// Consultar la lista de alumnos en la materia asignada al maestro
$alumnos = [];
if ($materia) {
    $materia_id = $materia['materia_id'];
    $stmt = $pdo->prepare("SELECT a.nombre AS alumno_nombre FROM alumnos a
                           JOIN alumnos_clases ac ON a.id = ac.id_alumno
                           WHERE ac.id_clase = ?");
    $stmt->execute([$materia_id]);
    $alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<h2>Materia Asignada</h2>
        <?php
        if ($materia) {
            echo "<p>Tu materia asignada es: " . $materia['materia_nombre'] . "</p>";
        } else {
            echo "<p>No estás asignado a ninguna materia.</p>";
        }
        ?>
        