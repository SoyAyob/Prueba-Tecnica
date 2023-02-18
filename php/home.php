<?php

session_start();

if (!isset($_SESSION['usuario'])) {
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
    <link rel="stylesheet" href="../recursos/css/home.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="bienvenido_cerrar">
        <h1>Bienvenido/a</h1>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </div>
    <section>
        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/jungle-fever-tropical-fusion-100ml.jpg" alt="">
            <h3>Product 0</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/just-juice-ice-nic-salt-grape-melon-10ml.webp" alt="">
            <h3>Product 1</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/geekvape-obelisk-u-pod-kit.webp" alt="">
            <h3>Product 2</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/bud-vape-ole-mini-banana-candy-20mg.webp" alt="">
            <h3>Product 3</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </section>
    <section>
        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/babel-e-liquids-canaima-10ml-121385.webp" alt="">
            <h3>Product 4</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/vaporesso-swag-px80-kit-69087.jpg" alt="">
            <h3>Product 5</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/md/elf-bar-disposable-lost-mary-bm600-triple-mango-20mg-pack-de-10.webp" alt="">
            <h3>Product 6</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/md/oxva-xlim-c-pod-kit-573569.webp" alt="">
            <h3>Product 7</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </section>
    <p style="font-size: 4em; color:red; font-weight: bold;">¡NO TE LO PIERDAS!</p>
    <div class="slider-frame">
        <ul>
            <li><img src="https://upload.eciglogistica.com/slider/nueva-promocion-de-eciglogistica-compra-5-geekvape-digi-u-pod-kit-y-te-regalamos-1-mas.png" alt=""></li>
            <li><img src="https://upload.eciglogistica.com/slider/nueva-promocion-de-eciglogistica-compra-5-geekvape-digi-u-pod-kit-y-te-regalamos-1-mas.png" alt=""></li>
            <li><img src="https://upload.eciglogistica.com/slider/nueva-promocion-de-eciglogistica-compra-5-geekvape-digi-u-pod-kit-y-te-regalamos-1-mas.png" alt=""></li>
            <li><img src="https://upload.eciglogistica.com/slider/nueva-promocion-de-eciglogistica-compra-5-geekvape-digi-u-pod-kit-y-te-regalamos-1-mas.png" alt=""></li>
        </ul>
    </div>

    <section>
        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/jungle-fever-tropical-fusion-100ml.jpg" alt="">
            <h3>Product 9</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/just-juice-ice-nic-salt-grape-melon-10ml.webp" alt="">
            <h3>Product 10</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/geekvape-obelisk-u-pod-kit.webp" alt="">
            <h3>Product 11</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/bud-vape-ole-mini-banana-candy-20mg.webp" alt="">
            <h3>Product 12</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </section>
    <section>
        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/babel-e-liquids-canaima-10ml-121385.webp" alt="">
            <h3>Product 13</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/sm/vaporesso-swag-px80-kit-69087.jpg" alt="">
            <h3>Product 14</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/md/elf-bar-disposable-lost-mary-bm600-triple-mango-20mg-pack-de-10.webp" alt="">
            <h3>Product 15</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="caja_producto">
            <img style="margin:10px;" width=" 250" src="https://upload.eciglogistica.com/producto/md/oxva-xlim-c-pod-kit-573569.webp" alt="">
            <h3>Product 16</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </section>

    <footer>
        <div>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-tiktok"></i>
            <i class="fa-solid fa-phone"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </footer>
</body>

</html>