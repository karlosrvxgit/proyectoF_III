<?php

require_once('../config/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $materia_id = $_POST['id'];
    $materia_nombre = $_POST['nombre'];
    $materiasAsignadas = $_POST['materias_asignadas'];

   
    $stmt = $pdo->prepare("UPDATE materias SET materia_nombre = ?, materias_asignadas = ? WHERE id = ?");
    $stmt->execute([$materia_nombre, $clasesAsignadas, $materia_id]);

    
    header('Location: listar_maestros.php');
    exit;
}
?>