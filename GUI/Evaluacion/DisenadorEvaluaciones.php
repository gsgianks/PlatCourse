<div class="tiposPregunta card">
	<h3>Seleccione el tipo de pregunta que desea agregar</h3>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Selección única</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Falso o verdadero</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Selección múltiple</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Asocie</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Completar oraciones</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Respuesta corta</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Desarrollo</a>
</div>
<div class="esquemaEvaluacion card">
	<div class="encabezado">
		<h3>Nombre de la prueba o título</h3>
		<p>Elaborado por: Nombre profesor</p>
		<p>Tiempo: 00:20:00</p>
	</div>
	<div class="contenido_preguntas">
		<ul>
			<li class="pregunta">
				<h4>¿Cúal de los siguientes nombres son teorias de la creación del universo?</h4>
				<input type="radio" name="respuesta">Teoria del BigBang<br>
				<input type="radio" name="respuesta">Generacional<br>
				<input type="radio" name="respuesta">Universo estacionario<br>
				<input type="radio" name="respuesta">Judío Cristiana<br>
				<input type="radio" name="respuesta">Ninguna de las anteriores<br>
				<input type="radio" name="respuesta">Todas<br>
			</li>
		</ul>
	</div>
</div>
<div id="formSelecMultiple" class="modal" style="display:block;">
	<div class="formPregunta">
		<span data-idcerrar="formSelecMultiple" class="icon-times btn_cerrar"></span>
		<h3>Pregunta selección múltiple</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea><br>	
		<label for="">Agregar respuestas</label>
		<button class="botonCircular verde_limon"><span class="icon-plus"></span></button><br>
		<div class="cntRespuesta">
			<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea><button class="botonCircular rojo_flat"><span class="icon-minus"></span></button>
		</div>
		<div class="footOpciones">
			<button class="boton_redondeado br_verde"><span class=""></span>Guardar</button>
			<button class="boton_redondeado br_azul"><span class=""></span>Cancelar</button>
		</div>
	</div>
</div>
