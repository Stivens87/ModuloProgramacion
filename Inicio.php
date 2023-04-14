<?php
require_once "verificar_sesion.php";
?>

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
                <!-- <a href="#">Zona</a> -->
                
                    <a href="#" class="dropdown-link">Zona<span class="caret"></span></a>
                <!-- <div class="dropdown-menu">
                    <a href="#">Enlace 1</a>
                    <a href="#">Enlace 2</a>
                    <a href="#">Enlace 3</a>
                </div> -->
                <button class="btnside" onclick="toggleSidebar()"><?php echo $username; ?></button>
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
            <div class="tit">
                <h2>Bienvenido, <?php echo $username; ?></h2>
                <br><br><br><br>
                <button class="form-submit" id="create-account-btn">Registrar usuario</button>
                <br><br>
            <div id="sidebar">
               <a href="logout.php" class="form-submit" id="create-account-btn">Cerrar Sesión</a>
            </div>
            </div>
        </div>

        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                sidebar.classList.toggle("hide");
            }
        </script>

<footer>
            <h3>creado por: Equipo de PHP</h3>
            
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