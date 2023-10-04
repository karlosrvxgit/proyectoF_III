<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSITY</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <h1>Login crv</h1>
    <div class="flex-initial w-64">
        <img src="/imagenes/logo.jpg" alt="">
    </div>
    <form action="/login/login.php" method="post">
        <label>correo</label>
        <input type="email" name="correo">
        <label>Contraseña</label>
        <input type="contrasena" name="contrasena">
        <button type="submit">Ingresar</button>

        <label for="rol">Rol:</label>
        <select name="rol" required>
            <option value="admin">Administrador</option>
            <option value="maestro">Maestro</option>
            <option value="alumno">Alumno</option>
        </select><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <div>
        <a href="/register/register.php">Registrarse</a>
    </div>


    



</body>

</html>