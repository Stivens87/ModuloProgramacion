<?php
// Configuración
$tiempo_inactivo = 150; // 5 minutos

// Iniciar sesión
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Obtener el nombre de usuario
$username = $_SESSION["username"];

// Verificar la actividad del usuario
if (isset($_SESSION['ultimo_actividad']) && (time() - $_SESSION['ultimo_actividad']) > $tiempo_inactivo) {
    // Si ha pasado demasiado tiempo, cerrar sesión por inactividad
    session_unset();
    session_destroy();
    echo "<script>alert('Su sesión ha sido cerrada por inactividad. Por favor inicie sesión de nuevo.');</script>";
    echo "<script>window.location.href = 'index.php';</script>"; // Redirigir forzosamente al usuario a la página de inicio de sesión
    exit();
} else {
    // Actualizar el tiempo de última actividad
    $_SESSION['ultimo_actividad'] = time();
}
?>