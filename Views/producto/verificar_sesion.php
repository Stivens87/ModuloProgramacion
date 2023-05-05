<?php
// Configuración
$tiempo_inactivo = 15; // 5 minutos

// Iniciar sesión
session_start();

if(!isset($_SESSION["username"])) {
header("Location: index.php");
 exit();
}
$username = $_SESSION["username"];
// Verificar la actividad del usuario
if (isset($_SESSION['ultimo_actividad']) && (time() - $_SESSION['ultimo_actividad']) > $tiempo_inactivo) {
	
	session_unset();
	session_destroy();
	echo "<script>alert('Su sesión ha sido cerrada por inactividad. Por favor inicie sesión de nuevo.');</script>";

 	header("Location: Index.php");
	exit();
} else {
// Actualizar el tiempo de última actividad
$_SESSION['ultimo_actividad'] = time();
}

?>



