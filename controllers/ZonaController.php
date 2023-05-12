<?php

class ZonaController
{
    private $Conexion;
    private $Connection;

    public function __construct()
    {
        require_once  __DIR__ . "/../core/Conexion.php";
        require_once  __DIR__ . "/../models/ZonaModel.php";

        $this->Conexion = new Conexion();
        $this->Connection = $this->Conexion->Conectar();
    }

    public function index($post)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $zona = $post["zona"];

        $zonaModel = new ZonaModel($this->Connection);

        $fecha = date('d-m-Y');
        $usuario = 2;
        $objPlantas = $zonaModel->buscarPlanta($zona, $usuario, $fecha);

        $volumenZona = $zonaModel->calcularTotalVol($zona);

        require_once  __DIR__ . "/../Views/ZonasView.php";
    }

    public function vista($vista, $datos = null)
    {
        $datos;
        require_once  __DIR__ . "/../Views/" . $vista . "View.php";
    }
}
