<?php
require_once "Data.php";

class DataLogin{
	var $conexion;
        
    function __construct(){
        $mysqli = new Data();
        $this->conexion = $mysqli->getConexion();
    }
	public function consultarUsuario($usuario,$contrasenia){
               
        $consulta="paValidarLogin";

        $conexion-> getConexion();
		
		$conexion->recorrer($consulta);
	}


}

?>