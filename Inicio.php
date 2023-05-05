<?php
require_once "config/verificar_sesion.php";
require_once "controllers/ZonaController.php";
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
</head>

<body>
    <div class="contenedor">
        
    <?php include('Views/layout/header.php');?>

    <?php 
        $zona = new ZonaController();
        $planta;
    ?>


    <section class="main">
        <article>
            <div class="fecha" id="fecha"><?php echo date('d-m-Y'); ?></div>
            </article>
            <hr>
            <article class="informe">

            <div class="imagenes">
                <div class="imag">
                    <a href="prueba.php"> <img src="assets/Img/img.jpg" alt="img1" ></a> 
                </div>
                    <div class="imag">
                    <img src="assets/Img/img1.png" alt="img2">
                </div>
                <div class="imag">
                    <img src="assets/Img/img4.png" alt="img3">
                </div>
                <div class="imag">
                    <img src="assets/Img/img3.png" alt="img4">
                </div>    
            </div>

            <form>
        <input type="file" name="archivo" id="archivo">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script>
        document.getElementById('archivo').addEventListener('change', function(){
            var archivo = this.files[0];
            var url = URL.createObjectURL(archivo);
            alert(url);
        });
    </script>
    </article>
    </section>

    <?php include 'Views/layout/sidebar.php' ?>
    
    <?php include 'Views/layout/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>

</html>