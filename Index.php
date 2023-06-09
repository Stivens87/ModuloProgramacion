<?php
require_once "config/global.php";

/* Cargamos el controlador y ejecutamos la accion */

if (isset($_GET["controller"]) || isset($_POST["controller"])) {
    $controlador = isset($_GET["controller"]) ? $_GET["controller"] : $_POST["controller"];
    $objControlador = cargarControlador($controlador);
    ejecutarAccion($objControlador);
} else {
    $objControlador = cargarControlador(default_controller);
    ejecutarAccion($objControlador);
}

function cargarControlador($controlador)
{
    
    $clase = "{$controlador}Controller";
    $archivo = "Controllers/{$controlador}Controller.php";
    /* se valida que archivo exista efectivamente */
    if (file_exists($archivo)) {
        /* se instancia el archivo */
        require_once $archivo;
        $objControlador = new $clase();
        return $objControlador;
    } else {
        return null;
    }
}
function ejecutarAccion($objControlador)
{

    if (isset($_GET["action"]) || isset($_POST["action"])) {
        $accion = isset($_GET["action"]) ? $_GET["action"] : $_POST["action"];
        /* validar que la función Exista */
        if (method_exists($objControlador, $accion)) {
            $objControlador->{$accion}($_POST);
        } else {
            echo "<script> alert('Ocurrio un error');</script>";
        }
    } else {
        $objControlador->{default_action}();
    }
}
