<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/Img/logo_argos_miniature.png" />
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <title>Informe Programación</title>
</head>
<body>
    <div class="contenedor">

        <?php include('Views/layout/header.php');?>

        <div class="imagenes">
            <div class="imag">
            <img src="assets/Img/img.jpg" alt="img1" >
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
        
        <?php include('Views/layout/sidebar.php'); ?>
        <?php include('Views/layout/footer.php'); ?> 

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>
</html>