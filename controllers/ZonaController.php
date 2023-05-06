<?php
require_once 'models/Zona.php';
class ZonaController{
    private $obZona;
    private $db;

    public function __construct(){
        $this->obZona = new Zona();
        $this->db = $this->obZona->getdb();
    }

    public function calcularArranque($planta)
        {
            $sql = "{CALL calcular_arranque (?)}";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $planta, PDO::PARAM_STR);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $encontrado = $row['cargue'];
            }
            return $encontrado;
        }

        public function buscarPlanta($zona)
        {
            $sql = "{CALL imprimir_info_planta (?)}";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $zona, PDO::PARAM_INT);
            $stmt->execute();
            while ($row = $stmt->fetch()) {

                echo "
                <div class='contenido'>
                    <div class='planta'>
                        <h3>" . $row['nombre'] . "</h3>
                    </div>
                    <div class='mSolicitadas'>
                        <input class='dato' type='text'  value=' ' >
                    </div>
                    <div class='mConfirmadas'>
                        <input class='dato' type='text'  value=' ' >
                    </div>
                    <div class='hora'>
                        <input class='dato' type='text' value=" . $row['Hora_Cargue'] . " >
                    </div>
                    <div class='volumen'>
                        <input class='dato' type='text' value=" . $row['volumen'] . " >
                    </div>
                    <div class='observaciones'>
                        <input class='dato' type='text' value=' ' >   
                    </div>
                    
                </div>

                <div class='separadorInt'>
                    <hr>
                </div>
                ";
            }
        }

        function calcularTotalVol($zona){
            $sql = "{CALL calcular_total_vol (?)}";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(1, $zona, PDO::PARAM_INT);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                echo "
                <div class='contenido'>
                    <div class='planta'>
                        <h3>  </h3>
                    </div>
                    <div class='mSolicitadas'>
                        <h3>  </h3>
                    </div>
                    <div class='mConfirmadas'>
                        <h3>  </h3>
                    </div>
                    <div class='hora'>
                        <h3> Total: </h3>
                    </div>
                    <div class='volumen'>
                        <h3>" . $row['volumen'] . "</h3>
                    </div>
                    <div class='observaciones'>
                        
                    </div>
                </div>

                <div class='separadorInt'>
                    <hr>
                </div>
                ";
            }    
        }
    }
?>
