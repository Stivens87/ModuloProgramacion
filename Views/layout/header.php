<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <title>Document</title>
</head>
<body>
    <header id="header">
        <div class="logo" id="logo">
            <img src="assets/Img/logo-argos.png" alt="Argos" height="64px">
        </div>

        <nav class="menu">
        <ul>
          <li><a href="http://localhost/moduloprogramacion/ModuloProgramacion">Inicio</a></li>
          <li>
            <a href="#">Zonas</a>
            <ul>
              <li><a href="centro.php"><div class="sub">Centro</div></a></li>
              <li><a href="norte.php"><div class="sub">Norte</div></a></li>
              <li><a href="noroc.php"><div class="sub">Noroccidente</div></a></li>
              <li><a href="suroc.php"><div class="sub">Suroccidente</div></a></li>
            </ul>
          </li>
          <li>
          <button class="btnside" onclick="toggleSidebar()">Login</button>
          </li>
        </ul>
      </nav>

    </header>
</body>
</html>