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
                <a href="#" class="hover:text-yellow-400">Gestión de Alumnos</a>
                <ul class="ml-4 group-hover:block #">
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/crear_alumno.php">Crear Alumno</a></li>
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/listar_alumnos.php">Listar Alumno</a></li>
                </ul>
            </li>
            <li class="mb-2">
                <a href="#" class="hover:text-yellow-400">Gestión de Materias</a>
                <ul class="ml-4 group-hover:block #">
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/crear_materia.php">Crear Materia</a></li>
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/listar_materias.php">Listar materias</a></li>
                </ul>
            </li>
            <li class="mb-2">
                <a href="·" class="hover:text-yellow-400">Relacionar Maestro y Clase</a>
                <ul class="ml-4 group-hover:block #">
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/relacionar_maestro_clase.php">Relacionar Maestro y Clase</a></li>
                </ul>
            </li>
            <li class="mb-2">
                <a href="·" class="hover:text-yellow-400">Cambio de Rol de Usuario</a>
                <ul class="ml-4 group-hover:block #">
                    <li class="hover:bg-gray-700 py-2"><a href="/admin/cambio_rol_usuario.php">Cambio de Rol de Usuario</a></li>
                    <li class="hover:bg-gray-700 py-2"><a href="/cerrar_sesion.php">cerrar_sesion</a></li>

                </ul>
            </li>
        </ul>
    </div>
</body>

</html>