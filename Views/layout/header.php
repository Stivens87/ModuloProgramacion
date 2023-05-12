<header id="header">
  <div class="logo" id="logo">
    <img src="assets/Img/logo-argos.png" alt="Argos" height="60px">
  </div>
  <nav class="menu">
    <ul>
      <li><a href="index.php?controller=Inicio&action=Inicio">Inicio</a></li>

      <?php if (isset($_SESSION["username"])) { ?>
        <li>
          <a href="#">Zonas</a>
          <ul>
            <form method="POST" action="index.php">
              <input type="hidden" name="controller" value="Zona">
              <input type="hidden" name="action" value="index">
              <button class="sub" type="submit" name="zona" value="2">Norte</button>
              <button class="sub" type="submit" name="zona" value="3">Noroccidente</button>
              <button class="sub" type="submit" name="zona" value="1">Centro</button>
              <button class="sub" type="submit" name="zona" value="4">Suroccidente</button>
            </form>
          </ul>
        </li>
        <li>
          <button class="btnside" onclick="toggleSidebar()"><?php echo $_SESSION["username"]; ?></button>
        <?php } else { ?>
          <button class="btnside" onclick="toggleSidebar()">Iniciar sesión</button>
        <?php } ?>
        </li>
    </ul>
  </nav>
</header>