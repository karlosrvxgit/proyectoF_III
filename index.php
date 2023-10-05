<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSITY</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="h-100  grid grid-cols-1 gap-4 content-normal">
    <div class="text-5xl font-extrabold ...">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-500 to-orange-500">
            Login
        </span><br><br>
    </div>
    <div class="flex-initial w-64 justify-center">
        <img src="/imagenes/logo.jpg" alt=""><br>
    </div>
    <form action="/login/login.php" method="post">
        <label class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-2
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100">correo</label>
        <input type="email" name="correo" class="bg-yellow-200/100">
        <label class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-2
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100">Contraseña</label>
        <input type="contrasena" name="contrasena" class="bg-yellow-200/100">
        <button type="submit">Ingresar</button>

        <label for="rol">Rol:</label>
        <select name="rol" required>
            <option value="admin">Administrador</option>
            <option value="maestro">Maestro</option>
            <option value="alumno">Alumno</option>
        </select><br><br><br>
        <div>
            <input type="submit" value="Iniciar Sesión" class="bg-yellow-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500 rounded-xl cursor-pointer text-white">
            <a href="/register/register.php" class="bg-yellow-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500 rounded-xl cursor-pointer text-white">Registrarse</a>
        </div>
    </form>
</body>

</html>