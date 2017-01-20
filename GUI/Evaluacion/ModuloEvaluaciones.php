<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="../../css/estilo_general.css">
	<link rel="stylesheet" href="../../css/fonts/style.css">
	<link rel="stylesheet" href="../../css/Roboto/WebFont/roboto_medium_macroman/stylesheet.css">
	<script src="../../js/jquery-3.1.1.min.js"></script>
	<script src="../../js/jquery.maskedinput.js"></script>
</head>
<body class="gris">
	<nav class="azul_oscuro">  
	  <ul>
	    <li class="hover_verde"><a href="" class="center_to_sides">Home</a></li>
	    <li><a href="" class="center_to_sides">Cursos</a></li>
	    <li><a href="" class="center_to_sides">Registro</a></li>
	  </ul>
	</nav>
	<main class="centrar_contenido_main">
		<?php
			include("ListarEvaluaciones.php");
		?>
		<div class="fEvaluacion modal" style="display: none;">
			<form id="fEvaluacion" class="contenido_modal form_material">
				<h3 class="titulo_sombra">Agregar una nueva evaluación</h3>
				<input type="hidden" name="consulta" value="addEvaluacion">
				<input type="text" name="nombreEvaluacion" placeholder="Nombre de la prueba" class="input_redondo_oscuro">
				<input type="text" id="hora" name="tiempo" placeholder="Tiempo para realizar" class="input_redondo_oscuro">
				<input type="hidden" name="profesor" value="obtenido-variable de sesion">
				<div>
					<input type="submit" value="Guardar" class="boton-borde boton_borde_aceptar">
					<button type="button" id="cancelFEvaluacion" data-form="fEvaluacion" class="boton-borde boton_borde_cancel" >Cancelar</button>
				</div>
			</form>
		</div>
	</main>
	<a class='btn_flotante verde_agua fabAddEvaluacion' id="" href='fEvaluacion'><span class="icon-plus"></span></a>
	<script src="../../js/funciones_modulo_evaluaciones.js"></script>
	<script>
		$("#hora")
	        .mask("00:00:00")
	        .focusout(function (event) {  
	            var target, phone, element;  
	            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
	            phone = target.value.replace(/\D/g, '');
	            element = $(target);  
	            element.unmask();  
	            if(phone.length > 10) {  
	                element.mask("00:00:00");  
	            } else {  
	                element.mask("00:00:00");  
	            }  
	        });

	</script>
</body>
</html>