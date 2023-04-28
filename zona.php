<?php
require_once 'db.php';

class Zona{
    private $db;

    public function __construct(){
        $this -> db = Database::DBconexion();
    }

    public function getdb(){
        return $this -> db;
    }

    public function calcularArranque($planta){
        $sql = "{CALL calcular_arranque (?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $planta, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $encontrado = $row['cargue'];
        }
        return $encontrado;
    }

    public function buscarPlanta($zona){
        $sql = "{CALL imprimir_info_planta (?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $zona, PDO::PARAM_INT);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            // echo $row['nombre'] . ", " . $row['volumen'] .  ", " . $row['Hora_Cargue'] . "<br />";
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
                        <h3>" . $row['volumen'] .  "</h3>
                    </div>
                    <div class='observaciones'>
                        <h3>Diseños especiales: C210224500 - C280289100 - T280225300</h3>
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