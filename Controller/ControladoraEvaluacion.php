<?php
	
	require_once "../Logic/LogicaEvaluacion.php";
	

	if (isset($_POST['consulta'])) {
    switch($_POST['consulta']) {
        case 'guardarEvaluacion':
	       	$logicaEvaluacion = new LogicaEvaluacion();
	        echo json_encode($logicaEvaluacion->guardarEvaluacion($_POST['datos']));
        break;

      /*  case 'guardarEvaluacionProfesor':
	       	$logicaEvaluacion = new LogicaEvaluacion();
	        echo json_encode($logicaEvaluacion->guardarEvaluacionProfesor($_POST['nombreEvaluacion'],$_POST['tiempo'],$_POST['profesor']));
        break;*/
    }
}
?>