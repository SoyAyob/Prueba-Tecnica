<?php

    include 'be_conexion.php';

    $nombre = $_POST['nombre'];
    $email =$_POST['email'];
    $contrasena = $_POST['contrasena'];


    //Contarseña Incriptada
    //$contrasena_hash = hash('sha512', $contrasena);
    //$hash = password_hash($contrasena, PASSWORD_DEFAULT, ['cost' => 10]);





    $query = "INSERT INTO usuarios(nombre, email, contrasena)
              VALUES('$nombre', '$email', '$contrasena')";

    //Verificar Usuarios Existentes

    $verficar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

        if(mysqli_num_rows($verficar_email)> 0){
            echo' 
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Registro</title>
                <link rel="stylesheet" href="../recursos/css/style.css">
            </head>
            <body>
                <p class="ayb_text">Este correo ya está registrado, intentalo de nuevo <a href="../index.php">Haz Clic aquí</a> para intentarlo otra vez. </p>
            </body>
            </html>
            ';
            mysqli_close($conexion);
            exit();
        }
    
    //
    include 'be_conexion.php';
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registro</title>
            <link rel="stylesheet" href="../recursos/css/style.css">
        </head>
        <body>
            <p class="ayb_text">Se ha registrado corectament <a href="../index.php">Haz Clic aquí</a> para iniciar sesion</p>
        </body>
        </html>
        ';
    }else{
        echo'
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registro</title>
            <link rel="stylesheet" href="../recursos/css/style.css">
        </head>
        <body>
            <p class="ayb_text">No se ha registrado corectament <a href="../index.php">Haz Clic aquí</a> para intentarlo otra vez.</p>
        </body>
        </html>
        ';
    }
    
    mysqli_close($conexion);
?>