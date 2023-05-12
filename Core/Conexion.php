<?php

class Conexion
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $port;

    public function __construct()
    {
        /* incluir archivo de parametros de la db */
        require_once "config/database.php";

        $this->host = host;
        $this->username = username;
        $this->password = password;
        $this->dbname = dbname;
        $this->port = port;
    }


    public function Conectar()
    {
        
        try {
            $conexion = new PDO("sqlsrv:server = {$this->host},{$this->port}; Database = {$this->dbname}", $this->username, $this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    static function dbconexion()
    {
        $host1 = "DESKTOP-H2JVRGK\SQLEXPRESS01";
        $username1 = "usuarioArgos";
        $password1 = "qwerty";
        $dbname1 = "DBprogramacion";
        $port1 = 1433;

        try {
            $conexion = new PDO("sqlsrv:server = $host1,$port1; Database = $dbname1", $username1, $password1);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
            
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        
    }
}
