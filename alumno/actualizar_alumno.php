<?php
// En actualizar_alumno.php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $alumno_id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $clasesRegistradas = $_POST['clases_registradas'];

    // Actualizar los datos del maestro en la base de datos
    $stmt = $pdo->prepare("UPDATE alumnos SET nombre = ?, apellidos = ?, clases_registradas = ? WHERE id = ?");
    $stmt->execute([$nombre, $apellidos, $clasesRegistradas, $alumno_id]);

    // Redirigir de vuelta a la página de listar_maestros.php o cualquier otra página necesaria
    header('Location: listar_alumnos.php');
    exit;
}
?>
