<?php 
    include_once 'Data.php';
    class DataEvaluacion{
        var $conexion;
        
        function __construct(){
            $mysqli = new Data();
            $this->conexion = $mysqli->getConexion();
        }
        /*Ejemplo ilustrativo de cómo llamo a los procedimientos almacenados!!*/
        public function insertarDetalle($codVenta, $listaDetalle){
            $array = json_decode($listaDetalle);
            foreach ($array as $lineaVenta) {
                $sentencia = $this->conexion->stmt_init();
                $sentencia->prepare("CALL paInsertarDetalleVenta(?,?,?,?,?);");

                $codigoVenta = $codVenta;
                $codigoProducto = $lineaVenta->codigoProducto;
                $precio = $lineaVenta->precio;
                $cantidad = $lineaVenta->cantidad;
                $totalLinea = $lineaVenta->totalLinea;
                $sentencia->bind_param("sssss",$codigoVenta, $codigoProducto, $precio, $cantidad, $totalLinea);

                $sentencia->execute();
            }
        }

        public function insertarEvaluacionProfesor($nombre,$tiempo,$idProfesor){

            $resultado=0;
            $sentencia = $this->conexion->stmt_init();
            $sentencia->prepare("CALL paAgregarEvaluacion(?,?,?);");

            $name = $nombre;
            $time = $tiempo;
            $id = $idProfesor;
        

            $sentencia->bind_param("sss",$nombre, $tiempo , $idProfesor);
            $sentencia->execute(); 

            $afectados= mysqli_affected_rows($this->conexion);

            if($afectados>0){
                   $resultado=1;
            }

            return $resultado;

        }
    }
?>