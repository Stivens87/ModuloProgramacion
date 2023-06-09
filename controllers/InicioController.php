<?php

class InicioController
{

    public function __construct()
    {
       
    }
    public function index()
    {
        $datos = null;
        $this->vista("index",$datos);
    }
    public function Inicio()
    { 
        require_once  __DIR__ . "/../core/verificar_sesion.php";
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $datos = null;
        $this->vista("Inicio",$datos);
    }

    public function vista($vista, $datos)
    {
        $datos;
        require_once  __DIR__ . "/../Views/" . $vista . "View.php";
    }
    
}
