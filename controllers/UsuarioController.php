<?php

class UsuarioController
{
    private $Conexion;
    private $Connection;

    public function __construct()
    {
        require_once  __DIR__ . "/../core/Conexion.php";
        require_once  __DIR__ . "/../models/UsuarioModel.php";

        $this->Conexion = new Conexion();
        $this->Connection = $this->Conexion->Conectar();
    }

    public function logIn($post)
    {

        $usuarioModel = new UsuarioModel($this->Connection);

        $username = $post["username"];
        $password = $post["password"];

        $nombre =  $usuarioModel->buscarUsuario($username, $password);
        if ($nombre == null) {
            echo "<script>alert('Error de usuario o Contraseña'); window.location='Index.php';</script>";
        } else {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["username"] = $username;
            $this->vista("Inicio");
        }
    }

    public function logOut()
    {
        session_destroy();
        header("Location: index.php");
    }


    public function registrar($post)
    {
        $usuarioModel = new UsuarioModel($this->Connection);

        // Obtener los datos del formulario
        $user = $post['username'];
        $pass = $post['password'];
        $nomb = $post['nombre'];
        $rol = $post['rol'];
        // Procesar los datos
        if (!empty($user) && !empty($pass) && !empty($nomb) && !empty($rol)) {
            // Llamar al método registrarUsuario()
            $ingresado = $usuarioModel->registrarUsuario($user, $pass, $nomb, $rol);

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
    public function vista($vista, $datos = null)
    {
        $datos;
        require_once  __DIR__ . "/../Views/" . $vista . "View.php";
    }
}
