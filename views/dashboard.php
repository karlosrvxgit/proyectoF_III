<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard crv</h1>
    <?php
    session_start();
    if($_SESSION["user_data"]["role_id"] === 3) {
        echo "<h2>Hola Admin crv</h2>";
    }
    if($_SESSION["user_data"]["role_id"] === 4) {
        echo "<h2>Hola Maestro</h2>";
    }
    if($_SESSION["user_data"]["role_id"] === 5) {
        // echo "<h2>Hola Alumno</h2>";
        include($_SERVER["DOCUMENT_ROOT"] . "/views/alumno/dashboard.php");
    }

?>;
    
</body>
</html>