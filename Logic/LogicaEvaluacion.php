<?php
require_once "database.php";
require_once "../Domain/Pregunta.php";

class LogicaEvaluacion{
	
	//include_once("../Data/DataEvaluacion.php");

    function __construct(){}

	public function separarPreguntasEvaluacion($arrayDatos){
		return $this->hola();
	}

	public function hola(){
		return "hola";
	}	

 /*	public function guardarEvaluacionProfesor($nombre,$tiempo,$idProfesor){
      
      $resultado=0;

         if (isset($nombre)&&isset($tiempo)&&isset($idProfesor)){
               $dataEvaluacion =new DataEvaluacion();
               $dataEvaluacion->insertarEvaluacionProfesor($nombre,$tiempo,$idProfesor);
	        $resultado=1;
	        }
	        return $resultado;
    
     }*/

   public function separarPregSelectUnica($preguntas){
        foreach($preguntas as $tipo){
            $contador = 0;
            $respuesta = false;
            foreach($tipo as $tipoPregunta){
                if($contador === 0){
                    $this->recorrer($tipoPregunta." pregunta...");    
                }else if($respuesta === true){
                    $this->recorrer($tipoPregunta." respuesta...");
                }else if($tipoPregunta === 'respuestas'){
                    $respuesta = true;
                }else if($respuesta === false){
                    $this->recorrer($tipoPregunta." opcion...");
                }
                $contador++;
            }
        }
    }

    public function separarPregSelectMulti($preguntas){
        foreach($preguntas as $tipo){
            $contador = 0;
            $respuesta = false;
            foreach($tipo as $tipoPregunta){
                if($contador === 0){
                    $this->recorrer($tipoPregunta." pregunta...");    
                }else if($respuesta === true){
                    $this-> recorrer($tipoPregunta." respuesta...");
                }else if($tipoPregunta === 'respuestas'){
                    $respuesta = true;
                }else if($respuesta === false){
                    $this->recorrer($tipoPregunta." opcion...");
                }
                $contador++;
            }
        }

    }

    function recorrer($dato){

    	$conn = getConnection();
        $sql = "call pahola('".$dato."');";
        if ($conn->query($sql) === TRUE) {
	        $conn->close();
        }else {
			$conn->close();
		}
	
    } 
}
?>