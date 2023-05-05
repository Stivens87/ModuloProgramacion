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
    <link rel="stylesheet" href="assets/CSS/index.css">
    <title>Informe Programación</title>
    <script src="JS/html2pdf.bundle.min.js"></script>
    <script src="JS/guardarPDF.js"></script> 
    <script src="JS/editar.js"></script> 
</head>
<body>
    <div class="contenedor">
        
        <?php include('Views/layout/header.php');?>
        <?php 
            $obZona = new Zona();
            $planta;
        ?>
        <section class="main" id="main">
            <article id="titulo_zona">
                <div class="fecha" id="fecha"><?php echo date('d-m-Y'); ?></div>
                <div class="titulo_zona"> 
                    <h3>
                    <?php
                    $z =  $zona = $_POST['zona'];
                    switch ($z){
                        case '1': echo 'Centro';
                        break;
                        case '2': echo 'Norte';
                        break;
                        case '3': echo 'Noroccidente';
                        break;
                        case '4': echo 'Suroccidente';
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
                    if (isset($_POST['zona'])) {
                    $zona = $_POST['zona'];

                    $obZona = new Zona();
                    $obZona->buscarPlanta($zona);
                    $obZona->calcularTotalVol($zona);
                    }
                ?>
            </article>
        </section>
        <br>
        <div class="botonpdf">
            <button id="btnCrearPdf">Exportar a PDF</button>
        </div>
        <br>
        <?php include 'Views/layout/sidebar.php' ?>
        <?php include 'Views/layout/footer.php' ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>