<div class="sidebar" id="sidebar">
    <button class="toggle-button" onclick="toggleSidebar()">&#9776;</button>

    <?php if (isset($_SESSION["username"])) { ?>
        <div class="tit">
            <h2>Bienvenido <?php echo $_SESSION["username"]; ?></h2>
            <br><br><br><br>
            <button class="form-submit" id="create-account-btn">Registrar usuario</button>
            <br><br>
            <div id="sidebar">
                <a href="index.php?controller=Usuario&action=logOut" class="form-submit" id="create-account-btn">Cerrar Sesión</a>
            </div>
        </div>
    <?php } else { ?>

        <form action="index.php" method="post">
            <input type="hidden" name="controller" value="Usuario"><input type="hidden" name="action" value="logIn">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" class="form-input" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-input" required>
            <br><br>
            <input type="submit" value="Iniciar sesión" class="form-submit">
            <br><br>
            <button class="form-submit_dis" id="log_out" disabled>Cerrar Sesión</button>
            <br><br>
        </form>
    <?php } ?>
</div>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("hide");
    }

    toggleSidebar()
</script>