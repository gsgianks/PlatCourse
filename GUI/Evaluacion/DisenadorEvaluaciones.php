<script src="../../js/items.js"></script>

<div class="tiposPregunta card">
	<h3>Seleccione el tipo de pregunta que desea agregar</h3>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta" onclick="agregarUnica()">Selección única</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta" onclick="agregarFalsoVerdadero()">Falso o verdadero</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta" onclick="agregarMultiple()">Selección múltiple</a>
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
		<div class="seleccion_unica"></div>
		<div class="falso_verdadero"></div>
		<div class="seleccion_multiple">
			<h4>Selecci&oacute;n multiple</h4>
			<div class="pre_selec_multi">
				<h4>¿Cúal de los siguientes nombres son teorias de la creación del universo?</h4>
				<input type="checkbox" name="respuesta" value="Teoria del BigBang">Teoria del BigBang<br>
				<input type="checkbox" name="respuesta" value="Generacional">Generacional<br>
				<input type="checkbox" name="respuesta" value="Universo estacionario">Universo estacionario<br>
				<input type="checkbox" name="respuesta" value="Judío Cristiana">Judío Cristiana<br>
				<input type="checkbox" name="respuesta" value="Ninguna de las anteriores">Ninguna de las anteriores<br>
				<input type="checkbox" name="respuesta" value="Todas">Todas<br>
			</div>
		</div>
	</div>
</div>
<button onclick="guardarEvaluacion()">Guardar Evaluacion</button>
<div id="formSelecMultiple" class="modal" style="display:none;">
	<form class="formPregunta form_select_multiple">
		<input type="hidden" name="consulta" value="selec_multi">
		<span data-idcerrar="formSelecMultiple" class="icon-times btn_cerrar"></span>
		<h3>Pregunta selección múltiple</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea><br>	
		<label for="">Agregar respuestas</label>
		<button  onclick="addOptionMulti()" type="button" class="botonCircular verde_limon"><span class="icon-plus"></span></button><br>
		<table class="cntRespuesta opt_multi">
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
		</table>
		<!--<div class="cntRespuesta">
			<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea>
			<button class="botonCircular rojo_flat"><span class="icon-minus"></span></button>
		</div>-->
		<div class="footOpciones">
			<button type="submit" class="boton_redondeado br_verde"><span class=""></span>Guardar</button>
			<button type="button" class="boton_redondeado br_azul" onclick="cerrarMultiple()"><span class=""></span>Cancelar</button>
		</div>
	</form>
</div>
<div id="formSelecUnica" class="modal" style="display:none;">
	<form class="formPregunta form_select_unica">
		<input type="hidden" name="consulta" value="selec_unica">
		<span data-idcerrar="formSelecUnica" class="icon-times btn_cerrar"></span>
		<h3>Pregunta selección U&acute;nica</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea><br>	
		<label for="">Agregar respuestas</label>
		<button  onclick="addOptionUnica()" type="button" class="botonCircular verde_limon"><span class="icon-plus"></span></button><br>
		<table class="cntRespuesta opt_unica">
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea></td>
			</tr>
		</table>
		<div class="footOpciones">
			<button type="submit" class="boton_redondeado br_verde"><span class=""></span>Guardar</button>
			<button type="button" class="boton_redondeado br_azul" onclick="cerrarUnica()"><span class=""></span>Cancelar</button>
		</div>
	</form>
</div>
<div id="formFalsoVerdadero" class="modal" style="display:none;">
	<form class="formPregunta form_falso_verdadero">
		<input type="hidden" name="consulta" value="falso_verdadero">
		<span data-idcerrar="formFalsoVerdadero" class="icon-times btn_cerrar"></span>
		<h3>Pregunta falso-verdadero</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro" required></textarea><br>	
		<label for="">Respuestas</label>
		<table class="cntRespuesta opt_falso_verdaero">
			<tr>
				<td><input type="hidden" name="pregunta" value="Falso"><input type="radio" name="pregunta" value="Falso">Falso</td>
			</tr>
			<tr>
				<td><input type="hidden" name="pregunta" value="Verdadero"><input type="radio" name="pregunta" value="Verdadero">Verdadero</td>
			</tr>
		</table>
		<div class="footOpciones">
			<button type="submit" class="boton_redondeado br_verde"><span class=""></span>Guardar</button>
			<button type="button" class="boton_redondeado br_azul" onclick="cerrarFalsoVerdadero()"><span class=""></span>Cancelar</button>
		</div>
	</form>
</div>
