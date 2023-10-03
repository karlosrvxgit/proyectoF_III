<?php
require_once('../config/database.php'); // Configuración de la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hashea la contraseña antes de almacenarla en la base de datos
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);

    // Inserta el usuario en la base de datos
    $stmt = $pdo->prepare("INSERT INTO usuarios (username, contrasena) VALUES (?, ?)");
    $stmt->execute([$username, $hashPassword]);

    echo 'Registro exitoso. Puedes iniciar sesión ahora.';
  
}
?>
