<?php
require_once 'db.php';
class Usuario {

    private $id;
    private $nombre;
    private $db;

    public function __construct(){
        $this -> db = Database::conexionBD();
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

    public function leer(){
        // $sql = "{CALL leer_tbprueba_PA (?, ?)}";             //interrogación por cada parametro que lleve
        $sql = "{CALL leer_tbprueba_PA ()}";                    //"{CALL nombre_procedimiento_almacenado ()}"
        $stmt = $this -> db ->prepare($sql);
        // $stmt->bindParam(1, $param1, PDO::PARAM_INT);        //si no tiene parametros        - los parametros
        // $stmt->bindParam(2, $param2, PDO::PARAM_STR);        //no requeire esta instrucción  - Se definen previamente
        //type: es el tipo de datos del parámetro. Puede ser PDO::PARAM_INT, PDO::PARAM_STR, PDO::PARAM_BOOL, 
        //PDO::PARAM_NULL, PDO::PARAM_LOB o PDO::PARAM_STMT.
        
        $stmt->execute();
        while ($row = $stmt->fetch()) {
        echo $row['id'] . ", " . $row['nombre'] . "<br />";
        }
        $this -> db = null; //Validar esta instrucción (Si sí se requiere cerrar la conexión)
    }

    public function buscar(){
        $p1 = 1;
        $sql = "{CALL buscar_tbprueba_PA (?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $p1, PDO::PARAM_INT);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'] . ", " . $row['nombre'] . "<br />";
        }
    }
    
    public function buscarUsuario($user, $pass){
        $sql = "{CALL log_in (?,?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $pass, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $encontrado = $row['nombre'];
        }
        return $encontrado;
    }
    
    public function procesarFormulario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $nomb = $_POST['nombre'];
            $rol = $_POST['rol'];
        // Procesar los datos
      if (!empty($user) && !empty($pass) && !empty($nomb) && !empty($rol)) {
        // Llamar al método registrarUsuario()
        $ingresado = $this->registrarUsuario($user, $pass, $nomb, $rol);
        
        if ($ingresado) {
          // Redirigir al usuario a otra página
          header('Location: Index.php');
          exit;
        } else {
          echo 'Error al registrar el usuario.';
        }        
      } else {
        // Mostrar un mensaje de error si algún campo está vacío
        echo 'Por favor, completa todos los campos.';
      }
  }
}
    public function registrarUsuario($user, $pass, $nomb, $rol){
        $sql = "{CALL registrarUsuario (?,?,?,?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $pass, PDO::PARAM_STR);
        $stmt->bindParam(3, $$nomb, PDO::PARAM_STR);
        $stmt->bindParam(4, $rol, PDO::PARAM_INT);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $ingresado = $row['valor'];
        }
        return $ingresado;
    }    
}

// Crear una instancia de la clase Usuario
$usuario = new Usuario();

// Procesar el formulario de registro de usuarios
$usuario->procesarFormulario();

?>