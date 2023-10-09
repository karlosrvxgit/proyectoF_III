<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSITY</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen flex justify-center items-center bg-blue-200">
    <div class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-orange-500">
        Login
    </div>
    <div class="flex-initial w-64 justify-center mt-8">
        <img src="/imagenes/logo.jpg" alt="">
    </div>
    <form action="/login/login.php" method="post" class="mt-8 p-8 bg-white rounded-lg shadow-lg max-w-xs">
        <div class="mb-4">
            <label for="correo" class="text-sm text-slate-500 block">Correo</label>
            <input type="email" name="correo" id="correo" class="w-full py-2 px-4 rounded-full border-2 text-sm focus:outline-none focus:border-violet-700">
        </div>
        <div class="mb-4">
            <label for="contrasena" class="text-sm text-slate-500 block">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="w-full py-2 px-4 rounded-full border-2 text-sm focus:outline-none focus:border-violet-700">
        </div>
        <div class="mb-4">
            <label for="rol" class="text-sm text-slate-500 block">Rol:</label>
            <select name="rol" id="rol" class="w-full py-2 px-4 rounded-full border-2 text-sm focus:outline-none focus:border-violet-700" required>
                <option value="admin">Administrador</option>
                <option value="maestro">Maestro</option>
                <option value="alumno">Alumno</option>
            </select>
        </div>
        <div class="mb-4 flex justify-between items-center">
            <button type="submit" class="w-32 py-2 bg-yellow-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500 rounded-full text-white">Ingresar</button>
            <a href="/register/register.php" class="text-sm text-blue-500 hover:underline">Registrarse</a>
        </div>
    </form>
</body>

</html>

