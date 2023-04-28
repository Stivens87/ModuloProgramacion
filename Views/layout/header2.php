<!DOCTYPE html>
<html>
  <head>
    <title>Mi Página Web</title>
    <style>
      /* Estilos CSS para el header */
      #header {
        background-color: #000000;
        color: #ffffff;
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
      }

      #header h1 {
        margin: 0;
        font-size: 24px;
      }

      #header ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
      }

      #header li {
        margin-left: 20px;
        position: relative;
      }

      #header li:hover ul {
        display: block;
      }

      #header ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #ffffff;
        padding: 10px;
      }

      #header ul ul li {
        display: block;
        margin: 5px 0;
      }
    </style>
  </head>
  <body>
    <!-- El header -->
    <header id="header">
      <h1>Mi Página Web</h1>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li>
            <a href="#">Zonas</a>
            <ul>
              <li><a href="#">Centro</a></li>
              <li><a href="#">Norte</a></li>
              <li><a href="#">Noroccidente</a></li>
              <li><a href="#">Suroccidente</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!-- El contenido de la página va aquí -->
  </body>
</html>
