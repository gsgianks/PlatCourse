<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="../../css/estilo_general.css">
	<link rel="stylesheet" href="../../css/fonts/style.css">
	<link rel="stylesheet" href="../../css/timepicker/timepicki.css">
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/jquery.maskedinput.js"></script>
	<script src="../../js/timepicki.js"></script>
	

</head>
<body class="gris">
	<nav class="azul_oscuro">  
	  <ul>
	    <li><a href="" class="center_to_sides">Home</a></li>
	    <li><a href="" class="center_to_sides">Cursos</a></li>
	    <li><a href="" class="center_to_sides">Registro</a></li>
	  </ul>
	</nav>
	<main id="mainModEvaluacion" class="centrar_contenido_main">
		<?php
			include("ListarEvaluaciones.php");
		?>
		<div class="fEvaluacion modal" style="display: none;">
			<form id="fEvaluacion" class="contenido_modal form_material">
				<h3 class="titulo_sombra">Agregar una nueva evaluación</h3>
				<input type="hidden" name="consulta" value="guardarEvaluacionProfesor">
				<label for="nombreEvaluacion">Nombre de la evaluación</label>
				<input type="text" name="nombreEvaluacion" placeholder="Ej: Quiz #1 - Vectores en el espacio" class="input_redondo_oscuro">
				<label for="hora">Tiempo limite para realizar</label>
				<input type="text" id="hora" name="tiempo" class="input_redondo_oscuro" value="00:20">
				<input type="hidden" name="profesor" value="1">
				<div>
					<input type="submit" value="Guardar" class="boton_redondeado br_verde">
					<button type="button" id="cancelFEvaluacion" data-form="fEvaluacion" class="boton_redondeado br_azul" >Cancelar</button>
				</div>
			</form>
		</div>
	<a class='btn_flotante verde_agua fabAddEvaluacion' id="" href='fEvaluacion'><span class="icon-plus"></span></a>
	</main>
	<script src="../../js/funciones_modulo_evaluaciones.js"></script>
	<script>
		$(document).ready(function(){
			$("#hora").timepicki({
				show_meridian:false,
				min_hour_value:00,
				max_hour_value:23,
				overflow_minutes:true,
				increase_direction:'up',
				disable_keyboard_mobile: true
			});
		});
	</script>
</body>
</html>