<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="CSS/index.css">
    <!-- <script src="Scripts/login.js"></script> -->
    <title>Informe Programación</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo" id="logo">
                <img src="Img/logo-argos.png" alt="Argos" height="80px">
            </div>
            <nav class="menu">
                <a href="http://localhost/moduloprogramacion/ModuloProgramacion">Inicio</a>
                <a href="#">Zona</a>

                <button class="btnside" onclick="toggleSidebar()">Login</button>
            </nav>
        </header>
        <section class="main">
            <div class="branding">
                <img src="" alt="">
            </div>
        </section>

        <div class="imagenes">
            <div class="imag">
            <img src="Img/img.jpg" alt="img1" >
            </div>
            <div class="imag">
            <img src="Img/img1.png" alt="img2">
            </div>
            <div class="imag">
            <img src="Img/img4.png" alt="img3">
            </div>
            <div class="imag">
            <img src="Img/img3.png" alt="img4">
            </div>
            
        </div>

        <div class="sidebar" id="sidebar">
            <button class="toggle-button" onclick="toggleSidebar()">&#9776;</button>
            <form action="procesar_login.php" method="post" >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-input" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-input" required>

                <input type="submit" value="Iniciar sesión" class="form-submit">
                <br><br>
                <button class="form-submit_dis" id="log_out" disabled> Cerrar Sesión</button>
                <br><br>                
                <div id="sidebar">
                <button class="form-submit" id="create-account-btn">Crear cuenta</button>
                </div>
            </form>
            <!-- <form action="registro.php" method="post" id="form_registro">
                <button class="form-submit" name="registro" id="registro"> Crear cuenta</button>
            </form> -->
                
                <a href="#"><h3>Olvidé mi contraseña</h3></a>
        </div>

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
</body>
</html>