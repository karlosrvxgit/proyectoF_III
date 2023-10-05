<?php

require_once('../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $materias_id = $_GET['id'];

    // Eliminar la materia de la base de datos
    $stmt = $pdo->prepare("DELETE FROM materias WHERE materia_id = ?");
    $stmt->execute([$materia_id]);

    // Redirigir de vuelta a la página de listar_alumnos.php 
    header('Location: /admin/listar_materias.php');
    exit;
}
?>