<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Universidad</h1>
    <?php
    session_start();
    if($_SESSION["user_data"]["role_id"] === 3) {
        echo "<h2>Hola Admin crv</h2>";
        include($_SERVER["DOCUMENT_ROOT"] . "/admin/admin_panel.php");
    }
    if($_SESSION["user_data"]["role_id"] === 4) {
        include($_SERVER["DOCUMENT_ROOT"] . "/maestro/maestro_panel.php");
    }
    if($_SESSION["user_data"]["role_id"] === 5) {
        include($_SERVER["DOCUMENT_ROOT"] . "/views/alumno/dashboard.php");
        
    }

?>;
    
</body>
</html>