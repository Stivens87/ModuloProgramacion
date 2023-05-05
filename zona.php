<?php
require_once 'db.php';
?>
    <?php
    class Zona
    {
        private $db;

        public function __construct()
        {
            $this->db = Database::DBconexion();
        }

        public function getdb()
        {
            return $this->db;
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
            $contador = 0;
            while ($row = $stmt->fetch()) {
                $contador ++;
                $id = "ob" . $contador;
                echo "
                <div class='contenido'>
                    <div class='planta'>
                        <h3>" . $row['nombre'] . "</h3>
                    </div>
                    <div class='mSolicitadas'>
                        <h3>XX</h3>
                    </div>
                    <div class='mConfirmadas'>
                        <h3>XX</h3>
                    </div>
                    <div class='hora'>
                        <h3>" . $row['Hora_Cargue'] . "</h3>
                    </div>
                    <div class='volumen'>
                        <h3>" . $row['volumen'] . "</h3>
                    </div>
                    <div class='observaciones' id=" . $id . ">
                        
                    </div>
                    <div class='btnEdit'>
                    <button id='editar' onClick='editarObs(" . $contador . ")'>editar</button>
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