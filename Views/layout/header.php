<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/header.css">
  <title>Inicio</title>
</head>
<body>
  <header id="header">
    <div class="logo" id="logo">
      <img src="assets/Img/logo-argos.png" alt="Argos" height="60px">
    </div>
    <nav class="menu">
      <ul>
        <li><a href="Inicio.php">Inicio</a></li>
        
        
        <?php if(isset($_SESSION["username"])) { ?>
        <li>
          <a href="#">Zonas</a>
          <ul>
            <form method="POST" action="Zonas.php">
              <button class="sub" type="submit" name="zona" value="2">Norte</button>
              <button class="sub" type="submit" name="zona" value="3">Noroccidente</button>
              <button class="sub" type="submit" name="zona" value="1">Centro</button>
              <button class="sub" type="submit" name="zona" value="4">Suroccidente</button>
            </form>
          </ul>
        </li>
        <li>
          <button class="btnside" onclick="toggleSidebar()"><?php echo $_SESSION["username"];?></button>
        <?php } else { ?>
          <button class="btnside" onclick="toggleSidebar()">Login</button>
        <?php } ?>
        </li>
      </ul>

    </nav>
  </header>
</body>
</html>
