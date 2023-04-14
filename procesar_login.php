<?php
require_once 'usuario.php';
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

<<<<<<< HEAD
$usuario = new Usuario();
$nombre =  $usuario->buscarUsuario($username, $password);
if ($nombre == null) {

    echo "<script>alert('Error de usuario o Contraseña'); window.location='Index.php';</script>";

=======
if (!empty($username) && !empty($password)) {
    $usuario = new Usuario();
    $nombre = $usuario->buscarUsuario($username, $password);
    if ($nombre == null) {
        echo "<script>alert('Error de usuario o Contraseña'); window.location='Index.php';</script>";
    } else {
        // echo "<script>alert('Usuario Logueado. Bienvenido:  $nombre');</script>";
        $_SESSION["username"] = $username;
    }
>>>>>>> 38563f5e1e469fc2d67424102de543e603a5fa2b
} else {
    echo "<script>alert('Por favor, ingrese su nombre de usuario y contraseña');</script>";
}
