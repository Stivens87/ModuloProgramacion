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

            <?php if(isset($_SESSION["username"])) { ?>
            

            <div class="tit">
                <h2>Bienvenido <?php echo $_SESSION["username"]; ?></h2>
                <br><br><br><br>
                <button class="form-submit" id="create-account-btn">Registrar usuario</button>
                <br><br>
            <div id="sidebar">
               <a href="logout.php" class="form-submit" id="create-account-btn">Cerrar Sesión</a>
            </div>
            </div>

        <?php } else { ?>

            <form action="procesar_login.php" method="post" >
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-input" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-input" required>
                <br><br>
                <input type="submit" value="Iniciar sesión" class="form-submit">
                <br><br><br><br>
                <button class="form-submit_dis" id="log_out" disabled> Cerrar Sesión</button>
                <br><br>                
           </form>
            

        <?php } ?>
    </div>
        <script>
            function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("hide");
            }
        </script>
        <script>toggleSidebar()</script>
</body>
</html>