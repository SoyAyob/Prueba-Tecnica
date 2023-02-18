<?php

session_start();

    include 'be_conexion.php';

    $email =$_POST['email'];
    $contrasena =$_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) == 1){
        $_SESSION['usuario'] = $email;
        header("location: ./home.php");
        mysqli_close($conexion);
        exit;
    }else{
        include 'be_conexion.php';
        echo'
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Iniciar sesion</title>
            <link rel="stylesheet" href="../recursos/css/style.css">
        </head>
        <body>
            <p class="ayb_text">Usuario no existente <a href="../index.php">Haz Clic aquí</a> para intentarlo </p>
        </body>
        </html>
        ';
        mysqli_close($conexion);
        exit;
    }

?>
