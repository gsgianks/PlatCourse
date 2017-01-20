<?php

class Data extends mysqli {

  private $conexion;

  public function Data() {
    try{
      $this->conexion = new mysqli('mysql.hostinger.es', 'u505779985_pursf', 'pureSoft01.12', 'u505779985_ptcrs') or die("Error de conexion!");
    }catch (mysqli_sql_exception $e){
      $mensaje = "Error de conexión a la base de datos.\nSi desea, vaya al inicio e intente de nuevo o ingrese mas tarde.";
      throw $e;
    }
  }

  public function recorrer($query) {
    return mysqli_fetch_array($query);
  }

  public function getConexion(){
    return $this->conexion;
  }

}
?>
