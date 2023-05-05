<?php

class SessionManager {

 private $tiempo_inactivo = 300; // 5 minutos en segundos

public function __construct() {
session_start();
}

public function iniciarSesion($usuario) {
        // Colocar información del usuario en sesión
 $_SESSION['usuario'] = $usuario;

        // Actualizar el tiempo de última actividad del usuario
 $_SESSION['ultimo_actividad'] = time();
 }

public function cerrarSesion() {
        // Destruir la sesión
session_unset();
session_destroy();
}

 public function verificarSesion() {
        // Verificar si la sesión está activa
if (isset($_SESSION['usuario'])) {

            // Verificar si el tiempo de inactividad ha sido superado
if (isset($_SESSION['ultimo_actividad']) && (time() - $_SESSION['ultimo_actividad']) > $this->tiempo_inactivo) {
                // Si ha pasado demasiado tiempo, cerrar sesión
 $this->cerrarSesion();
return false;
 }

            // Actualizar el tiempo de la última actividad del usuario
 $_SESSION['ultimo_actividad'] = time();
 return true;
}

 return false;
 }

}

//===================================================================
// Define la cantidad de tiempo en segundos que el usuario puede estar inactivo antes de cerrar sesión
$tiempo_inactivo = 300; // 5 minutos en segundos



// Inicia la sesión
session_start();



// Verifica si el tiempo de inactividad ha sido superado
if (isset($_SESSION['ultimo_actividad']) && (time() - $_SESSION['ultimo_actividad']) > $tiempo_inactivo) {
    // Si ha pasado demasiado tiempo, destruye la sesión y redirecciona al usuario al inicio de sesión
session_unset();
session_destroy();
header("Location: login.php");
exit();
}




?>