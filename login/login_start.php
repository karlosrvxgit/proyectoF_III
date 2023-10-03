<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login start</h1>

    <?php
    session_start();

    // Verificar si el usuario está autenticado
    if (isset($_SESSION['user_id'])) {
       

        // Recupera los datos de la sesión
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        $user_email = $_SESSION['user_email'];

        $user_email = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_username'] = $user['username'];
            $_SESSION['user_rol'] = $user['rol'];

            // Redirige al usuario a la página correspondiente según el rol
            if ($user['rol'] === 'admin') {
                header('Location: admin_panel.php');
            } elseif ($user['rol'] === 'maestro') {
                header('Location: maestro_panel.php');
            } elseif ($user['rol'] === 'alumno') {
                header('Location: alumno_panel.php');
            }
            exit;
        } else {
            echo 'Credenciales incorrectas. <a href="/login/login.php">Volver a intentar</a>';
        }





    } else {
        // Si el usuario no está autenticado, redirige a la página de inicio de sesión
        header('Location: /login/login.php');
        exit();
    }
    ?>
    <a href='/edit/edit.php'>Editar Información</a>;
</body>
</html>