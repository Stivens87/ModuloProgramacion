<?php
require_once 'models/Usuario.php';
class UsuarioController{
    private $obUsuario;
    private $db;
    public function __construct(){
        $this->obUsuario = new Usuario();
        $this->db = $this->obUsuario->getdb();
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

    public function buscarPlanta($zona){
        $sql = "{CALL buscar_tbprueba_PA (?)}"; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $zona, PDO::PARAM_INT);
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
          echo "<script>alert('Usuario Registrado con exito!'); window.location.href='Index.php';</script>";
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
        $sql = "{CALL registrar_Usuario (?,?,?,?)}"; 
        $stmt = $this->db->prepare($sql);
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
}


?>