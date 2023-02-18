<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: ./php/bienvenido.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="recursos/css/style.css">
</head>

<body>

    <main>

        <div class="ayb_global">
            <div class="ayb_div_trasera">
                <div class="ayb_div_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="ayb_btn_login">Iniciar Sesión</button>
                </div>
                <div class="ayb_div_trasera_registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="ayb_btn_registro">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="ayb_div_login_registro">
                <!--Login-->
                <form action="php/be_iniciar_sesion_usuario.php" method="POST" class="ayb_formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electronico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/be_registro_usuario.php" method="POST" class="ayb_formulario_registro">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre" required>
                    <input type="email" placeholder="Correo Electronico" name="email" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="recursos/js/script.js"></script>
</body>

</html>