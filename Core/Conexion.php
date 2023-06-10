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

}
