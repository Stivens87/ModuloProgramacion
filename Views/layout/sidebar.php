<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <title>Document</title>
</head>
<body>
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
</body>
</html>