<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="CSS/index.css">
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
            <article>
                <div class="fecha" id="fecha"><?php echo date('d-m-Y'); ?></div>
            </article>
            <hr>
            <article class="informe">

                <div class="titulos">
                    <div class="planta">
                        <h3>Planta</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>Mixer Solicitadas</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>Mixer Confirmadas</h3>
                    </div>
                    <div class="hora">
                        <h3>Hora Arranque</h3>
                    </div>
                    <div class="volumen">
                        <h3>Volumen</h3>
                    </div>
                    <div class="observaciones">
                        <h3>Observaciones</h3>
                    </div>
                </div>
                <div class="separador">
                    <hr>
                </div>

                <div class="contenido">
                    <div class="planta">
                        <h3>Medellin</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>22</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>19</h3>
                    </div>
                    <div class="hora">
                        <h3>06:00</h3>
                    </div>
                    <div class="volumen">
                        <h3>432</h3>
                    </div>
                    <div class="observaciones">
                        <h3>Diseños especiales: C210224500 - C280289100 - T280225300</h3>
                    </div>
                </div>

                <div class="separadorInt">
                    <hr>
                </div>

                <div class="contenido">
                    <div class="planta">
                        <h3>Manizalez</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>30</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>12</h3>
                    </div>
                    <div class="hora">
                        <h3>06:30</h3>
                    </div>
                    <div class="volumen">
                        <h3>380</h3>
                    </div>
                    <div class="observaciones">
                        <h3>Diseños especiales: C210224500 - C280289100 - T280225300</h3>
                    </div>
                </div>

                <div class="separadorInt">
                    <hr>
                </div>

                <div class="contenido">
                    <div class="planta">
                        <h3>Bello</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>3</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>2</h3>
                    </div>
                    <div class="hora">
                        <h3>09:20</h3>
                    </div>
                    <div class="volumen">
                        <h3>65</h3>
                    </div>
                    <div class="observaciones">
                        <h3>Diseños especiales: C210224500 - T280225300</h3>
                    </div>

                </div>

                <div class="separadorInt">
                    <hr>
                </div>

                <div class="contenido">
                    <div class="planta">
                        <h3>Copacabana</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>4</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>3</h3>
                    </div>
                    <div class="hora">
                        <h3>07:20</h3>
                    </div>
                    <div class="volumen">
                        <h3>48</h3>
                    </div>
                    <div class="observaciones">
                        <h3>-</h3>
                    </div>
            </article>
        </section>

        <div class="sidebar" id="sidebar">
            <button class="toggle-button" onclick="toggleSidebar()">&#9776;</button>
            <form action="index.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-input" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-input" required>

                <input type="submit" value="Log In" class="form-submit">
                <br><br>
                <button class="form-submit" id="log_out"> Log Out</button>
                <br><br>
                <div id="sidebar">
                    <button class="form-submit" id="create-account-btn">Create an account</button>
                </div>
            </form>
            <a href="#">
                <h3>Olvidé mi contraseña</h3>
            </a>
        </div>

        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.toggle("hide");
            }
        </script>

        <footer>
            <h3>creado por: Equipo de PHP</h3>
            <h3>Redes Sociales</h3>
        </footer>

    </div>

    <?php

    require_once 'usuario.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $usuario = new Usuario();
    $nombre =  $usuario->buscarUsuario($username, $password);
    if ($nombre == null) {
        echo "<script>alert('Error de usuario o Contraseña');</script>";
    } else {
        echo "<script>alert('Usuario Logueado. Buenvenido:  $nombre');</script>";
    }

    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>