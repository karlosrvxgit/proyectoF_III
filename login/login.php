<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <!-- Formulario de inicio de sesión -->
    <form action="/login/login_process.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="text" name="email" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <label for="rol">Rol:</label>
        <select name="rol" required>
            <option value="admin">Administrador</option>
            <option value="maestro">Maestro</option>
            <option value="alumno">Alumno</option>
        </select><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
    <a href="/register/register.php">Registrarse</a>
</body>
</html>