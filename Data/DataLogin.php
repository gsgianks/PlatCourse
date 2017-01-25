<?php
require_once "Data.php";

class DataLogin{
	
    var $conexion;
        
    function __construct(){
        $mysqli = new Data();
        $this->conexion = $mysqli->getConexion();
    }

	public function consultarUsuario($email, $contrasenia){
        $sentencia = $this->conexion->stmt_init();
        $sentencia->prepare("CALL paValidarLogin(?,?);");

        $correo = $email;
        $pass = $contrasenia;

        $sentencia->bind_param("ss",$correo, $pass);
        $sentencia->execute(); 
        $sentencia->bind_result($id, $nombre_usuario, $email, $tipo_usuario);
        $usuario = array();

        while($sentencia->fetch()){
            array_push($usuario, array("idUsuario"=>$id, "nombreUsuario"=>$nombre_usuario, "correo"=>$email, "tipoUsuario"=>$tipo_usuario));
        }
            
        $sentencia->close();
        mysqli_close($this->conexion);
        return $usuario;
	}
}

?>