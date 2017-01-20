<?php

class LogicaEvaluacion{
	
	//include_once("../Data/DataEvaluacion.php");

    function __construct(){}

	public function guardarEvaluacion($arrayDatos){
		$datos = "holassssi ".$arrayDatos[1]." count: *".count($arrayDatos);

		//$datos." nada";
		
		return $datos."* fin;";
	}

 	public function guardarEvaluacionProfesor($nombre,$tiempo,$idProfesor){
      
      $resultado=0;

         if (isset($nombre)&&isset($tiempo)&&isset($idProfesor)){
               $dataEvaluacion =new DataEvaluacion();
               $dataEvaluacion->insertarEvaluacionProfesor($nombre,$tiempo,$idProfesor);
	        $resultado=1;
	        }
	        return $resultado;
    
     }


     /*
	/*for($i=0;$i<intval($temp);$i++){
			$datos." 1 ";
			$datos.$arrayDatos[$i]." - ";
		}
//$temp = count($arrayDatos);

		if(5 < 6){
			$datos." iguales";
		}
		for($i=0;$i<count($arrayDatos);$i++) {

			$datos.'<br />';

		}*/
		//$datos." nada";
		/*foreach($arrayDatos as $tipoPregunta){
			$datos." ".$tipoPregunta;
		 	/*foreach($tipoPregunta as $pregunta){
		 		for($i=0; $i<count($pregunta); $i++){
					$datos.$pregunta[$i]." - ";
			    }
		 	}
		 }*/
     */
}
?>