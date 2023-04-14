<?php
require_once 'usuario.php';
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if (!empty($username) && !empty($password)) {
    $usuario = new Usuario();
    $nombre = $usuario->buscarUsuario($username, $password);
    if ($nombre == null) {
        echo "<script>alert('Error de usuario o Contraseña'); window.location='Index.php';</script>";
    } else {
        // echo "<script>alert('Usuario Logueado. Bienvenido:  $nombre');</script>";
        $_SESSION["username"] = $username;
    }
} else {
    echo "<script>alert('Por favor, ingrese su nombre de usuario y contraseña');</script>";
}
