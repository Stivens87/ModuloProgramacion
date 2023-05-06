<?php
require "Views/producto/verificar_sesion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="Scripts/login.js"></script>
    <title>Informe Programación</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo" id="logo">
                <img src="Img/logo-argos.png" alt="Argos" height="80px">
            </div>
            <nav class="menu">
                <a href="#">Inicios</a>
                <a href="#">Zona</a>
                <button class="btnside" onclick="toggleSidebar()">Login</button>
            </nav>
        </header>
        <section class="main">
            <div class="branding">
                <img src="" alt="">
            </div>
        </section>

        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.toggle("hide");
            }
        </script>
        
        <footer>
            <h3>Creado por: Equipo de PHP</h3>
            
            <div class="redes">
                <div class="redesIMG">
                <h3>Redes Sociales  </h3>
                    <a href="https://instagram.com/cementos_argos?igshid=YmMyMTA2M2Y=" target="_blank"><img src="img/logo_inta.png" alt="Argos" height="30px"></a>
                    <a href="https://www.facebook.com/cementosargos" target="_blank"><img src="Img/logo_face.png" alt="Argos" height="30px"></a>
                    <a href="https://www.linkedin.com/company/cementos-argos/" target="_blank"><img src="Img/logo_link.png" alt="Argos" height="30px"></a>
                    <a href="https://www.youtube.com/@cementosargos" target="_blank"><img src="Img/logo_you.png" alt="Argos" height="30px"></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
    <?php

    require_once 'controllers/UsuarioController.php';
    // Crear una instancia de la clase Usuario
    $usuario = new UsuarioController();
    // Procesar el formulario de registro de usuarios
    $usuario->procesarFormulario();

    ?>
</body>
</html>  