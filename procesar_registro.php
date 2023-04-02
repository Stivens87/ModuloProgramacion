<?php
require_once 'db.php';

if (!$conn) {
  die('Error de conexión: ' . print_r(sqlsrv_errors(), true));
}

// Procesar los datos del formulario de registro
$user = $_POST['username'];
$pss = $_POST['password'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];

// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// // Insertar los datos en la base de datos
// $sql = "INSERT INTO usuarios(nombre, password) VALUES (?,?)";
// $params = array($nombre,$password);
// $stmt = sqlsrv_query($conn, $sql, $params);

// if (!$stmt) {
//   die('Error al insertar los datos: ' . print_r(sqlsrv_errors(), true));
// }

$usuario = new Usuario();
$nombre =  $usuario -> buscarUsuario($username, $password);
if($nombre==null){
    echo "<script>alert('Error de usuario o Contraseña');</script>";
}else{
    echo "<script>alert('Usuario Logueado. Buenvenido:  $nombre');</script>";
}

// Redirigir al usuario a la página de inicio
header('Location: Index.php');
exit();
?>
