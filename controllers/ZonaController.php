<?php

class ZonaController
{
    private $Conexion;
    private $Connection;

    public function __construct()
    {
        require_once  __DIR__ . "/../core/Conexion.php";
        require_once  __DIR__ . "/../models/ZonaModel.php";
        require_once  __DIR__ . "/../core/verificar_sesion.php";

        $this->Conexion = new Conexion();
        $this->Connection = $this->Conexion->Conectar();
    }

    public function index($post)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $zona = $post["zona"];

        // $plantas = $post["plantas"];
        // $observaciones = $post["observaciones"];

        $zonaModel = new ZonaModel($this->Connection);

        // $fecha = date('Y-m-d');
        $fecha = '2023-06-10';
        $usuario = $_SESSION['id'];
        $objPlantas = $zonaModel->buscarPlanta($zona, $usuario, $fecha);
        //$zonaModel->EditarInforme($plantas, $observaciones);

        $volumenZona = $zonaModel->calcularTotalVol($zona);
       
        require_once  __DIR__ . "/../Views/ZonasView.php";
    }

    public function editarInforme($post)
    {
      
        //$fecha = date('d-m-Y');
        $zonaModel = new ZonaModel($this->Connection);
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $zona = $post["zona"];
        $fecha = '2023-06-10';
        $usuario = $_SESSION['id'];
        
        //echo var_dump($post);
        $plantas =$post['plantas'];
        $observaciones = $post['observaciones'];
        for ($i=0; $i < count($plantas); $i++) { 
            $zonaModel->EditarInforme($plantas[$i], $observaciones[$i], $fecha);
        }
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
