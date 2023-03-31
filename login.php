<?php

require_once 'usuario.php';

$username = $_POST ["username"];
$password = $_POST ["password"];

$usuario = new Usuario();
$log =  $usuario -> buscarUsuario($username, $password);

if($log==null){
    echo "<script>alert('Error de usuario o Contraseña');</script>";
}

echo "<script>alert('Usuario Logueado. Buenvenido:  $log');</script>";

?>