<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-800 text-white h-screen w-1/5 p-4">
        <h2 class="text-2xl font-semibold mb-4">Admin Panel</h2>
        <ul>
            <li class="mb-2">
                <a href="#" class="hover:text-yellow-400">Inicio</a>
            </li>
            <li class="mb-2">
            <a href="#" class="hover:text-yellow-400">Gestión de Maestros</a>
            <ul class="ml-4 group-hover:block #">
                <li class="hover:bg-gray-700 py-2"><a href="/admin/crear_maestro.php">Crear Maestro</a></li>
                <li class="hover:bg-gray-700 py-2"><a href="/admin/listar_maestros.php">Listar Maestros</a></li>
            </ul>
            </li>
            <li class="mb-2">
                <a href="#" class="hover:text-yellow-400">Configuración</a>
            </li>
            <li class="mb-2">
                <a href="#" class="hover:text-yellow-400">Reportes</a>
            </li>
        </ul>
    </div>

    <div>
        <h1 class="text-3xl font-semibold mb-4">Bienvenido al Panel de Administrador</h1>

        <!-- Funcionalidades para el administrador -->
        <h2>Gestión de Maestros</h2>
        <a href="/admin/crear_maestro.php">Crear Maestro</a>
        <a href="/admin/listar_maestros.php">Listar Maestros</a>

        <h2>Gestión de Alumnos</h2>
        <a href="crear_alumno.php">Crear Alumno</a>
        <a href="listar_alumnos.php">Listar Alumnos</a>

        <h2>Gestión de Materias</h2>
        <a href="/admin/crear_materia.php">Crear Materia</a>
        <a href="/admin/listar_materias.php">Listar Materias</a>

        <h2>Relacionar Maestro y Clase</h2>
        <a href="relacionar_maestro_clase.php">Relacionar Maestro y Clase</a>

        <h2>Cambio de Rol de Usuario</h2>
        <a href="cambio_rol_usuario.php">Cambiar Rol de Usuario</a>

        <br>
        <a href="/cerrar_sesion.php">Cerrar sesión</a>
    </div>

</body>

</html>