<?php
require_once 'db.php';

if (!$conn) {
  die('Error de conexión: ' . print_r(sqlsrv_errors(), true));
}

// Procesar los datos del formulario de registro
$nombre = $_POST['nombre'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios(nombre, password) VALUES (?,?)";
$params = array($nombre,$password);
$stmt = sqlsrv_query($conn, $sql, $params);

if (!$stmt) {
  die('Error al insertar los datos: ' . print_r(sqlsrv_errors(), true));
}

// Redirigir al usuario a la página de inicio
header('Location: Index.php');
exit();
?>
