<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=".assets/Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="assets/CSS/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="assets/JS/html2pdf.bundle.min.js"></script>
    <script src="assets/JS/guardarPDF.js"></script> 
    <title>Informe Programación</title>
</head>

<body>
    <div class="contenedor">
        <?php include('layout/header.php'); ?>
        <section class="main" id="main">
            <article id="titulo_zona">
                <div class="fecha" id="fecha"><?php echo date('d-m-Y'); ?></div>
                <div class="titulo_zona">
                    <h3>
                        <?php
                        switch ($zona) {
                            case '1':
                                echo 'Centro';
                                break;
                            case '2':
                                echo 'Norte';
                                break;
                            case '3':
                                echo 'Noroccidente';
                                break;
                            case '4':
                                echo 'Suroccidente';
                                break;
                        }
                        ?>
                    </h3>
                </div>
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
                
                <?php
                if (isset($zona)) {

                    /* Plantas */
                    $contenedorPlantas = "";
                    foreach ($objPlantas as $planta) {
                        $contador = 0;
                        $contenedorPlantas .= "<div class='contenido'>
                        <div class='planta'>
                            <h3>" . $planta['planta'] . "</h3>
                        </div>
                        <div class='mSolicitadas'>
                            <input id='solcitadas". $contador ."' class='dato' type='text'  value=" . $planta['msolicitadas'] . " >
                        </div>
                        <div class='mConfirmadas'>
                            <input class='dato' type='text'  value=" . $planta['mconfirmadas'] . " >
                        </div>
                        <div class='hora'>
                            <input class='dato' type='text' value=" . $planta['horaArranque'] . " >
                        </div>
                        <div class='volumen'>
                            <input class='dato' type='text' value=" . $planta['volumen'] . " >
                        </div>
                        <div class='observaciones'>
                            <input class='dato' type='text' value=" . $planta['observaciones'] . ">   
                        </div>
                        </div>
                        <div class='separadorInt'>
                            <hr>
                        </div>";
                    }

                    echo $contenedorPlantas;
                    $contenedorVolumen = "";

                    $contenedorVolumen .= "
                    <div class='contenido'>
                        <div class='planta'>
                            <h3>  </h3>
                        </div>
                        <div class='mSolicitadas'>
                            <h3>  </h3>
                        </div>
                        <div class='mConfirmadas'>
                            <h3>  </h3>
                        </div>
                        <div class='hora'>
                            <h3> Total: </h3>
                        </div>
                        <div class='volumen'>
                            <h3>" . $volumenZona . "</h3>
                        </div>
                        <div class='observaciones'>
                            
                        </div>
                    </div>

                    <div class='separadorInt'>
                        <hr>
                    </div>";

                    echo $contenedorVolumen;
                }
                ?>
            </article>
        </section>
        <br>

        <div class="botonpdf">
            <button id="btnGuardar" class="boton_zonas">Guardar</button>
            <button id="btnCrearPdf" class="boton_zonas">Exportar a PDF</button>
        </div>
        <br>
    </div>
    <?php include 'layout/sidebar.php' ?>
    <?php include 'layout/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/JS/guardarPDF.js"></script>
</body>

</html>