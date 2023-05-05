<?php
require_once 'config/db.php';
class Usuario {

    private $id;
    private $nombre;
    private $db;

    public function __construct(){
        $this -> db = Database::DBconexion();
    }

    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }
    public function getNombre(){
        return $this -> nombre;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function getdb(){
        return $this -> db;
    }
  
}


