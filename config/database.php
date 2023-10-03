<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Cambia esto si tu base de datos está en un servidor diferente
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
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

