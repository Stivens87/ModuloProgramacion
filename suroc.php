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
        
        <?php include('Views/layout/header.php'); ?>

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

                <?php
                    $obZona = new Zona();
                    $zona = 4; 
                    $obZona->buscarPlanta($zona);

                ?>
                <!-- 
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
                </script> -->


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