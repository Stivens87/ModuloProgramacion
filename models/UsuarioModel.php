<?php

class UsuarioModel
{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;

    }
    public function leer()
    {
        // $sql = "{CALL leer_tbprueba_PA (?, ?)}";             //interrogación por cada parametro que lleve
        $sql = "{CALL leer_tbprueba_PA ()}";                    //"{CALL nombre_procedimiento_almacenado ()}"
        $stmt = $this->con->prepare($sql);
        // $stmt->bindParam(1, $param1, PDO::PARAM_INT);        //si no tiene parametros        - los parametros
        // $stmt->bindParam(2, $param2, PDO::PARAM_STR);        //no requeire esta instrucción  - Se definen previamente
        //type: es el tipo de datos del parámetro. Puede ser PDO::PARAM_INT, PDO::PARAM_STR, PDO::PARAM_BOOL, 
        //PDO::PARAM_NULL, PDO::PARAM_LOB o PDO::PARAM_STMT.

        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'] . ", " . $row['nombre'] . "<br />";
        }
        $this->con = null; //Validar esta instrucción (Si sí se requiere cerrar la conexión)
    }

    public function buscarPlanta($zona, $usuario, $fecha)
    {
        $objPlantas = [];
        
        $sql = "{CALL consultar_informe (?, ?, ?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $zona, PDO::PARAM_INT);
        $stmt->bindParam(2, $usuario, PDO::PARAM_INT);
        $stmt->bindParam(3, $fecha, PDO::PARAM_STR);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $objPlantas[] = $row;
        }
        return $objPlantas;
    }
    public function registrarUsuario($user, $pass, $nomb, $rol)
    {

        $sql = "{CALL registrar_Usuario (?,?,?,?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $pass, PDO::PARAM_STR);
        $stmt->bindParam(3, $nomb, PDO::PARAM_STR);
        $stmt->bindParam(4, $rol, PDO::PARAM_INT);
        $stmt->execute();
        // while ($row = $stmt->fetch()) {
        //     $ingresado = $row['Return Value'];
        // }
        return true;
    }
    public function buscarUsuario($user, $pass)
    {   
        
        $sql = "{CALL log_in (?,?)}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $pass, PDO::PARAM_STR);

        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $encontrado = $row;
        }
        if(isset($encontrado)){
            return $encontrado;
        }
        
    }
}
