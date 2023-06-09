<?php

class ZonaModel
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function calcularArranque($planta)
    {
        $sql = "{CALL calcular_arranque (?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $planta, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $encontrado = $row['cargue'];
        }
        return $encontrado;
    }


    public function buscarPlanta($zona, $usuario, $fecha)
    {
        $plantaObj = [];
        $sql = "{CALL consultar_informe (?, ?, ?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $zona, PDO::PARAM_INT);
        $stmt->bindParam(2, $usuario, PDO::PARAM_INT);
        $stmt->bindParam(3, $fecha, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
 
            $plantaObj[] = $row;
        }

        return $plantaObj;
    }


    function calcularTotalVol($zona)
    {
        $total_vol = 0;

        $sql = "{CALL calcular_total_vol (?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $zona, PDO::PARAM_INT);
        $stmt->execute();
        while ($row = $stmt->fetch()) {

            $total_vol = $row['volumen'];
        }
        return $total_vol;
    }

    function EditarInforme($planta, $obs)
    {

        $sql = "{CALL calcular_total_vol (?,?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $planta, PDO::PARAM_STR);
        $stmt->bindParam(2, $obs, PDO::PARAM_STR);
        $stmt->execute();
        // while ($row = $stmt->fetch()) {

        //     $total_vol = $row['volumen'];
        // }
        // return $total_vol;
    }




}
