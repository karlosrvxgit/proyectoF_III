<?php
// En actualizar_maestro.php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $maestro_id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $clasesAsignadas = $_POST['clases_asignadas'];

    // Actualizar los datos del maestro en la base de datos
    $stmt = $pdo->prepare("UPDATE maestros SET nombre = ?, clases_asignadas = ? WHERE id = ?");
    $stmt->execute([$nombre, $clasesAsignadas, $maestro_id]);

    // Redirigir de vuelta a la página de listar_maestros.php o cualquier otra página necesaria
    header('Location: listar_maestros.php');
    exit;
}
?>
