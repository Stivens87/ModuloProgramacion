<div class="sidebar" id="sidebar">
  <h1 style="color:#C4D600">Registro de usuarios</h1>
  <form id="registro-form" action="index.php?controller=Usuario&action=registrar" method="post" class="">
    <label for="nombre">Username:</label>
    <br>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Contraseña:</label>
    <br>
    <input type="password" id="password" name="password" required>
    <br><br>
    <label for="nombre">Nombre:</label>
    <br>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="rol">Rol:</label>
    <br>
    <input type="number" id="rol" name="rol" required>
    <br><br>
    <button type="submit" class="form-submit">Registrarse</button>
    <br><br>
    <a href="inicio.php" class="form-submit" id="create-account-btn">Atrás</a>
  </form>
</div>