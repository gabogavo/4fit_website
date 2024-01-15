<?php
session_start();
if(!isset($_SESSION['correo'])){
    echo '
    <script>
    alert("Por favor debes inicar sesion")
    windows.location = "index.html";
    </script>
    ';
    header("Location: dashboard.html");
    exit();
}
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu cuenta</title>
    <link rel="icon" href="img/icono.ico">
</head>
<body>
    <h1>Este es tu espacio</h1>
    <a href="../dashboard.html">Ingresa aca a tu cuenta</a>
</body>
</html>