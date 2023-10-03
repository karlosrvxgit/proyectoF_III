<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Registrarse</h1>
    <!-- Formulario de registro -->
    <form action="/register/register_process.php" method="post">

        <label for="name">Nombre:</label>
        <input type="text" name="name" required><br>

        <label for="rol">Rol:</label>
        <input type="rol" name="rol" required><br>

        <label for="username">Username:</label>
        <input type="username" name="username" required><br>


        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <input type="submit" value="Registrarse">
    </form>
    <a href="/login/login.php">Iniciar Sesión</a>
    
</body>
</html>