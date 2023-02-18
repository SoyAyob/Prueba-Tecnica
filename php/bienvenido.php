<?php

    session_start();
    
    if(!isset($_SESSION['usuario'])){
        header("location: ../index.php");
        session_destroy();
        die();
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a digitalias</title>
    <link rel="stylesheet" href="../recursos/css/style.css">
</head>
<body style="background:#ffffff !important;">
    <div style="display: flex; justify-content: space-around;">
        <h1>Bienvenido/a</h1>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </div>
    <section>
        <div>
            <img src="https://upload.eciglogistica.com/producto/sm/jungle-fever-tropical-fusion-100ml.jpg" alt="">
            <h3>Product 1</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
        </div>
    </section>
</body>
</html>