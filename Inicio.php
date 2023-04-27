<?php
require_once "verificar_sesion.php";
require_once "Zona.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asstes/Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="assets/CSS/sidebar.css">
    <link rel="stylesheet" href="assets/CSS/index.css">
    <title>Informe Programación</title>
</head>

<body>
    <div class="contenedor">
        
    <?php include('Views/layout/header.php');?>


        <?php 
        $zona = new Zona();
        $planta;
        ?>


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
                        <h3>Hora Arranque (hh:mm:ss)</h3>
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
                        <h3><?php echo $zona->calcularArranque('502'); ?></h3>
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
                        <h3><?php echo $zona->calcularArranque('503'); ?></h3>
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
                        <h3><?php echo $zona->calcularArranque('505'); ?></h3>
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
                        <h3><?php echo $zona->calcularArranque('610'); ?></h3>
                    </div>
                    <div class="volumen">
                        <h3>48</h3>
                    </div>
                    <div class="observaciones">
                        <h3>-</h3>
                    </div>
                </div>

                <div class="separadorInt">
                    <hr>
                </div>


                
                
                



                <div class="contenido">
                    <div class="planta">
                        <h3>Prueba</h3>
                    </div>
                    <div class="mSolicitadas">
                        <h3>4</h3>
                    </div>
                    <div class="mConfirmadas">
                        <h3>3</h3>
                    </div>
                    <div class="hora">
                        <h3><?php echo $zona->calcularArranque('610'); ?></h3>
                    </div>
                    <div class="volumen">
                        <h3>48</h3>
                    </div>
                    <div class="observaciones">
                        <h3>-</h3>
                    </div>

                    <form>
                        <input type="checkbox" id="mostrarDiv" name="mostrarDiv" value="1" onclick="mostrarDiv()"> Mostrar div<br>
                    </form>

                </div>


                <div id="miDiv" style="display: none;">
                    Contenido del div que se mostrará al seleccionar el checkbox.
                </div>

                <script>
                    function mostrarDiv() {
                        var checkBox = document.getElementById("mostrarDiv");
                        var div = document.getElementById("miDiv");
                        if (checkBox.checked == true){
                            div.style.display = "block";
                        } else {
                            div.style.display = "none";
                        }
                    }
                </script>


            </article>
        </section>

        <div class="sidebar" id="sidebar">
            <button class="toggle-button" onclick="toggleSidebar()">&#9776;</button>
            <div class="tit">
                <h2>Bienvenido <?php echo $username; ?></h2>
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

            <?php include 'Views/layout/footer.php' ?>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>