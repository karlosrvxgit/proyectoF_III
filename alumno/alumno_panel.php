<?php
session_start();

// Verificar si el usuario tiene el rol de alumno
if ($_SESSION['user_rol'] !== 'alumno') {
    header('Location: acceso_denegado.php');
    exit;
}

require_once('config.php'); // Configuración de la base de datos

// Obtener la ID del alumno desde la sesión
$alumno_id = $_SESSION['user_id'];

// Consultar las clases en las que está registrado el alumno
$stmt = $pdo->prepare("SELECT c.nombre AS clase_nombre FROM clases c
                       JOIN alumnos_clases ac ON c.id = ac.id_clase
                       WHERE ac.id_alumno = ?");
$stmt->execute([$alumno_id]);
$clases = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel de Alumno</title>
</head>
<body>
    <h1>Bienvenido al Panel de Alumno</h1>

    <!-- Mostrar las clases en las que está registrado -->
    <h2>Clases Registradas</h2>
    <?php
    if ($clases) {
        echo "<ul>";
        foreach ($clases as $clase) {
            echo "<li>" . $clase['clase_nombre'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No estás registrado en ninguna clase.</p>";
    }
    ?>

    
    <!-- Formulario para cambiar las clases -->
<h2>Cambiar Clases</h2>
<form action="cambiar_clases.php" method="POST">
    <!-- Lista de clases disponibles -->
    <label for="nuevas_clases">Selecciona las nuevas clases:</label><br>
    <select name="nuevas_clases[]" multiple>
        <?php
        // Consultar todas las clases disponibles
        $stmt = $pdo->prepare("SELECT id, nombre FROM clases");
        $stmt->execute();
        $clases_disponibles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($clases_disponibles) {
            foreach ($clases_disponibles as $clase) {
                echo "<option value='" . $clase['id'] . "'>" . $clase['nombre'] . "</option>";
            }
        } else {
            echo "<option value='' disabled>No hay clases disponibles</option>";
        }
        ?>
    </select><br><br>
    <input type="submit" value="Cambiar Clases">
</form>


    <br>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>

