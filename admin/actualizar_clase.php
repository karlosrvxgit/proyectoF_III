<?php
// En actualizar_clase.php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $clase_id = $_POST['id'];
    $nombre = $_POST['nombre'];
    // Agrega más campos según tus necesidades

    // Actualizar los datos de la clase en la base de datos
    $stmt = $pdo->prepare("UPDATE clases SET nombre = ? WHERE id = ?");
    $stmt->execute([$nombre, $clase_id]);

    // Redirigir de vuelta a la página de listar_clases.php o cualquier otra página necesaria
    header('Location: listar_clases.php');
    exit;
}
?>
