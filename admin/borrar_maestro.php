<?php
//borrar_maestros.php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $maestro_id = $_GET['id'];

    // Eliminar el maestro de la base de datos
    $stmt = $pdo->prepare("DELETE FROM maestros WHERE id = ?");
    $stmt->execute([$maestro_id]);

    // Redirigir de vuelta a la página de listar_maestros.php o cualquier otra página necesaria
    header('Location: listar_maestros.php');
    exit;
}
?>
