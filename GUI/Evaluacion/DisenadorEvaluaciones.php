<script src="../../js/items.js"></script>

<div class="tiposPregunta card">
	<h3>Seleccione el tipo de pregunta que desea agregar</h3>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta" onclick="agregarUnica()">Selección única</a>
	<a href="#" class="boton_redondeado verde_agua btn_tipo_pregunta">Falso o verdadero</a>
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
		<div class="selección_unica">
			<h3>Selecci&oacute;n &Uacute;nica</h3>
			<div class='pre_selec_unica'>
                <h4>¿Pregunta?</label><h4>
                <input type='radio' name='option' value='value'>hola<br>
                <input type='radio' name='option' value='value'>hola<br>
            </div>
		</div>
		<div class="seleccion_multiple">
			<div class="pre_selec_multi">
				<h3>Selecci&oacute;n multiple</h3>
				<h4>¿Cúal de los siguientes nombres son teorias de la creación del universo?</h4>
				<input type="checkbox" name="respuesta">Teoria del BigBang<br>
				<input type="checkbox" name="respuesta">Generacional<br>
				<input type="checkbox" name="respuesta">Universo estacionario<br>
				<input type="checkbox" name="respuesta">Judío Cristiana<br>
				<input type="checkbox" name="respuesta">Ninguna de las anteriores<br>
				<input type="checkbox" name="respuesta">Todas<br>
			</div>
		</div>
	</div>
</div>
<div id="formSelecMultiple" class="modal" style="display:none;">
	<form class="formPregunta">
		<input type="hidden" name="consulta" value="selec_multi">
		<span data-idcerrar="formSelecMultiple" class="icon-times btn_cerrar"></span>
		<h3>Pregunta selección múltiple</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea><br>	
		<label for="">Agregar respuestas</label>
		<button  onclick="addOptionMulti()" type="button" class="botonCircular verde_limon"><span class="icon-plus"></span></button><br>
		<table class="cntRespuesta opt_multi">
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
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
	<form class="formPregunta">
		<input type="hidden" name="consulta" value="selec_unica">
		<span data-idcerrar="formSelecMultiple" class="icon-times btn_cerrar"></span>
		<h3>Pregunta selección U&acute;nica</h3>
		<label for="pregunta">Descripción de la pregunta</label><br>
		<textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea><br>	
		<label for="">Agregar respuestas</label>
		<button  onclick="addOptionUnica()" type="button" class="botonCircular verde_limon"><span class="icon-plus"></span></button><br>
		<table class="cntRespuesta opt_unica">
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
			<tr>
				<td><textarea name="pregunta" placeholder="Ejemplo: ¿Cúal es el nombre de..?" class="input_redondo_oscuro"></textarea></td>
			</tr>
		</table>
		<div class="footOpciones">
			<button type="submit" class="boton_redondeado br_verde"><span class=""></span>Guardar</button>
			<button type="button" class="boton_redondeado br_azul" onclick="cerrarUnica()"><span class=""></span>Cancelar</button>
		</div>
	</form>
</div>
