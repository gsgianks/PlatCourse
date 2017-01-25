<?php
	
	require_once "../Logic/LogicaEvaluacion.php";
	

	if (isset($_POST['consulta'])) {
    switch($_POST['consulta']) {
        case 'guardarEvaluacion':
            $logicaEvaluacion = new LogicaEvaluacion();

            $array= $_REQUEST['datos'];

            //echo json_encode("mae 1");


            $logicaEvaluacion->separarPregSelectUnica($array[0]);
            $logicaEvaluacion->separarPregSelectMulti($array[1]);

            /*foreach($array as $tipoPregunta){
                foreach($tipoPregunta as $tipo){
                    $j = 0;
                    foreach($tipo as $tipoPregunta){
                        recorrer($tipoPregunta);
                    }
                }
            } */   
   
        	echo json_encode($logicaEvaluacion->separarPreguntasEvaluacion($array));

        break;

      /*  case 'guardarEvaluacionProfesor':
	       	$logicaEvaluacion = new LogicaEvaluacion();
	        echo json_encode($logicaEvaluacion->guardarEvaluacionProfesor($_POST['nombreEvaluacion'],$_POST['tiempo'],$_POST['profesor']));
        break;*/
     	}
    }


   

     


?>