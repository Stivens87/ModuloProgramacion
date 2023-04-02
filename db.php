<?php

class Database{
    static function conexionBD(){

        $host = "localhost";
        $username = "sa";
        $password = "123456";
        $dbname = "programacionBD";
        $port = 1433;

        try{
            $conexion = new PDO("sqlsrv:server = $host, $port; Database = $dbname", $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error de conexión: " . $e->getMessage();
        }    
        return $conexion;
    }
}

?>