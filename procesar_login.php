<?php
require_once 'controllers/UsuarioController.php';
session_start();


$username = $_POST["username"];
$password = $_POST["password"];

$usuario = new UsuarioController();
$nombre =  $usuario->buscarUsuario($username, $password);
if ($nombre == null) {

    echo "<script>alert('Error de usuario o Contraseña'); window.location='Index.php';</script>";

} else {
    // echo "<script>alert('Usuario Logueado. Buenvenido:  $nombre');</script>";
    $_SESSION["username"] = $username;
    header("Location: Inicio.php");
    exit();
}

?>