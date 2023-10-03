<?php
// Datos de conexión a la base de datos
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "uni";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Habilitar el manejo de errores de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Establecer el juego de caracteres a UTF-8
    $pdo->exec("SET NAMES utf8");
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>

