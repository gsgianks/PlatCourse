$(document).ready(function () {
    //alertify.set('confirm','transition', 'fade');
    //alertify.set('notifier','position', 'top-right');

    //alert("items");
    //$(".opt-selec-unica").draggable();
    
    $('form').submit(function (e) {
        alert("click form");
        e.preventDefault();
    

        var data = $(this).serializeArray();
        var url = "Controller/controladora_login.php";        

        if($(this).children('input[name=consulta]').val()=== "selec_unica"){
        //	alert("select unica");
        	selectUnica(data);
        }else if($(this).children('input[name=consulta]').val()=== "selec_multi"){
          //  alert("select multi");
            selectMulti(data);
        }else if($(this).children('input[name=consulta]').val()=== "falso_verdadero"){
            alert("falso verdadero");
            falsoVerdadero(data);
        }
        //validar

    });
});


// funcion para mostrar el modal para agregar item marque con x
function modalMarqueX(){
	$('#marqueX').css("display", "block");
}
//funcion para agregar una nueva opcion
function addOptionX(){
	//alert("add addOptionX");
	var temp = $("#table-options-x tr").length+1;
	if(temp <8){

		$("#table-options-x").append("<tr class='addOption'><td style='display: none;'>"+temp+"</td><td>Option "+temp+"</td><td><input type='text' name='val'/></td><td><button type='button' onclick='deleteOptionX("+temp+")'>x</buttton></td></tr>");
	}else{

		alert("La cantidad maxima de opciones es 7");
	}

	
}

function deleteOptionX(num_fila){
	alert("delete click "+num_fila);
	$("#table-options-x tr").each(function (index) 
        {
        	//alert(index);
            $(this).children("td").each(function (index2) 
            {
            //	alert(index2+"  "+$(this).text());
                if($(this).text() === ""+num_fila){
              //      alert("encontrado");
                    
                    $(this).closest('tr').remove();
                }
            })            
        });
	$("#table-options-x").find("tr:eq("+num_fila+")").remove();
}

function addNewQuestion(){
	
}

function seleccionUnica(data){

	var html = "<div class='opt-selec-unica'>";
	$(data).each(function(i, field){
		if(i===1){
			html+="<label>¿"+field.value+"?</label><br>"
		}else if(i>1){
			html+="<input class='input_redondo_oscuro' type='radio' name='option' value='"+field.value+"'>"+field.value+"<br>";
		}
	});
	html+="</div>";

	if($('#seleccion_unica').is(':empty')){
		$("#seleccion_unica").append("<h4>Selecci&oacute;n unica</h4>");
		$("#seleccion_unica").append(html);

	}else{
		$("#seleccion_unica").append(html);

	}
	$(".formulario input[type=text]").val("");
	$(".addOption").remove();
	$('#marqueX').css("display", "none");	
}



function guardarEvaluaciones(){

	var arrayTipos = ["uno","dos","tres","dos"];

		var arraySeleccionUnica = [];
        $("#seleccion_unica .opt-selec-unica").each(function (index) { 
            
        	//alert(index+" index");
        	var arraySeleccionUnicaValores = [];
        	arraySeleccionUnicaValores.push($(this).children('label').text());

        	$(this).children('input').each(function (index2) { 
            	arraySeleccionUnicaValores.push($(this).attr('value'));
        		//alert(index2 +" index2"+$(this).attr('name'));
          
			});
			arraySeleccionUnica.push(arraySeleccionUnicaValores);
			alert(arraySeleccionUnicaValores.toString()+" valores");          
		});
        arrayTipos.push(arraySeleccionUnica); 

        $.each(arrayTipos , function(key, value) {
	    $.each(value , function(ke, valu) {
		    $.each(valu , function(k, val) {
			    alert(val);
			});
		});
	});      
    var data = {consulta:'guardarEvaluacion',datos:arrayTipos};
    var url = '../Controller/ControladoraEvaluacion.php'

    ajax(url,data);
}

function btnRespuesta(boton){
	boton.css('background','green');
}

//seleccion multiple

function agregarMultiple(){
    $('#formSelecMultiple').css("display", "block");
}

function cerrarMultiple(){
    $('#formSelecMultiple').css("display", "none");
}

function addOptionMulti(){
    var temp = $(".opt_multi tr").length;
   // alert("add option multiple "+temp);
    if(temp <7){

        $(".opt_multi").append("<tr><td style='display: none;'>"+temp+"</td><td><textarea name='pregunta' placeholder='Ejemplo: ¿Cúal es el nombre de..?' class='input_redondo_oscuro'></textarea></td><td><button type='button' onclick='deleteOptionMultiple("+temp+")' class='botonCircular rojo_flat'><span class='icon-minus'></span></button></td></tr>");
    }else{

        alert("La cantidad maxima de opciones es 7");
    }
}

function selectMulti(data){
   // alert("function multiple")
    /*<div class="pre_selec_multi">
                <h4>¿Cúal de los siguientes nombres son teorias de la creación del universo?</h4>
                <input type="checkbox" name="respuesta">Teoria del BigBang<br>
                <input type="checkbox" name="respuesta">Generacional<br>
                <input type="checkbox" name="respuesta">Universo estacionario<br>
                <input type="checkbox" name="respuesta">Judío Cristiana<br>
                <input type="checkbox" name="respuesta">Ninguna de las anteriores<br>
                <input type="checkbox" name="respuesta">Todas<br>
            </div>*/

    var html = "<div class='pre_selec_multi'>";
    $(data).each(function(i, field){
        if(i===1){
            html+="<h4>¿"+field.value+"?</h4>"
        }else if(i>1){
            html+="<input type='checkbox' name='option' value='"+field.value+"'>"+field.value+"<br>";
        }
    });
    html+="</div>";
    //alert(html);

    if($('.seleccion_multiple').is(':empty')){
        alert("empty");
        $(".seleccion_multiple").append("<h4>Selecci&oacute;n unica</h4>");
        $(".seleccion_multiple").append(html);

    }else{
        alert("!empty")
        $(".seleccion_multiple").append(html);

    }
    $('#formSelecMultiple').css("display", "none");
   // $(".formulario input[type=text]").val("");
   // $(".addOption").remove();
   // $('#marqueX').css("display", "none");  
   $('.form_select_multiple').each (function(){

      this.reset();

    }); 
}

function deleteOptionMultiple(num_fila){
   // alert("delete click "+num_fila);
    $(".opt_multi tr").each(function (index) 
        {
            //alert(index);
            $(this).children("td").each(function (index2) 
            {
            //  alert(index2+"  "+$(this).text());
                if($(this).text() === ""+num_fila){
              //      alert("encontrado");
                    
                    $(this).closest('tr').remove();
                }
            })            
        });
    //$("#table-options-x").find("tr:eq("+num_fila+")").remove();
}

// seleccion unica
function agregarUnica(){
    $('#formSelecUnica').css("display", "block");
}

function cerrarUnica(){
    $('#formSelecUnica').css("display", "none");
}

function addOptionUnica(){
    var temp = $(".opt_unica tr").length;
    //alert("add option multiple "+temp);
    if(temp <7){

        $(".opt_unica").append("<tr><td style='display: none;'>"+temp+"</td><td><textarea name='pregunta' placeholder='Ejemplo: ¿Cúal es el nombre de..?' class='input_redondo_oscuro'></textarea></td><td><button type='button' onclick='deleteOptionUnica("+temp+")' class='botonCircular rojo_flat'><span class='icon-minus'></span></button></td></tr>");
    }else{

        alert("La cantidad maxima de opciones es 7");
    }
}

function selectUnica(data){
    //alert("function unica")

    var html = "<div class='pre_selec_unica'>";
    $(data).each(function(i, field){
        if(i===1){
            html+="<h4>¿"+field.value+"?</h4>"
        }else if(i>1){
            html+="<input type='radio' name='option' value='"+field.value+"'>"+field.value+"<br>";
        }
    });
    html+="</div>";
   // alert(html);

    if($('.seleccion_unica').is(':empty')){
        alert("empty");
        $(".seleccion_unica").append("<h4>Selecci&oacute;n unica</h4>");
        $(".seleccion_unica").append(html);

    }else{
        alert("diferente empty")
        $(".seleccion_unica").append(html);

    }
    $('#formSelecUnica').css("display", "none");  
    $('.form_select_unica').each (function(){
      this.reset();
    });
}

function deleteOptionUnica(num_fila){
  //  alert("delete click "+num_fila);
    $(".opt_unica tr").each(function (index) 
        {
            //alert(index);
            $(this).children("td").each(function (index2) 
            {
              //alert(index2+"  "+$(this).text());
                if($(this).text() === ""+num_fila){
              //      alert("encontrado");
                    
                    $(this).closest('tr').remove();
                }
            })            
        });
    //$("#table-options-x").find("tr:eq("+num_fila+")").remove();
}

//falso verdadero
function agregarFalsoVerdadero(){
    $('#formFalsoVerdadero').css("display", "block");
}
function cerrarFalsoVerdadero(){
    $('#formFalsoVerdadero').css("display", "none");
}

function falsoVerdadero(data){
    //alert("function unica")

    var html = "<div class='pre_falso_verdadero'>";
    $(data).each(function(i, field){
        if(i===1){
            html+="<h4>¿"+field.value+"?</h4>"
        }else if(i>1){
            html+="<input type='radio' name='option' value='"+field.value+"'>"+field.value+"<br>";
        }
    });
    html+="</div>";
   // alert(html);

    if($('.falso_verdadero').is(':empty')){
        alert("empty");
        $(".falso_verdadero").append("<h4>Falso-Verdadero</h4>");
        $(".falso_verdadero").append(html);

    }else{
        alert("diferente empty")
        $(".falso_verdadero").append(html);

    }
    $('#formFalsoVerdadero').css("display", "none");  
    $('.form_falso_verdadero').each (function(){
      this.reset();
    });
}

//guardar evaluación
function guardarEvaluacion(){
    alert("guardarEvaluacion");
    var arrayTipos = [];

        var arraySeleccionUnica = [];
        $(".contenido_preguntas .pre_selec_unica").each(function (index) { 
            
            //alert(index+" index");
            var arraySeleccionUnicaValores = [];
            arraySeleccionUnicaValores.push($(this).children('h4').text());

            $(this).children('input').each(function (index2) { 
                arraySeleccionUnicaValores.push($(this).attr('value'));
                //alert(index2 +" index2"+$(this).attr('name'));
          
            });
            arraySeleccionUnicaValores.push("respuestas");
            arraySeleccionUnicaValores.push("correcta");
            arraySeleccionUnicaValores.push("correcta 2");
            arraySeleccionUnicaValores.push("correcta 3");

            arraySeleccionUnica.push(arraySeleccionUnicaValores);
            alert(arraySeleccionUnicaValores.toString()+" valores");          
        });
        arrayTipos.push(arraySeleccionUnica); 

        var arraySeleccionMultiple = [];
        $(".contenido_preguntas .pre_selec_multi").each(function (index) { 
            
            //alert(index+" index-multiple");
            var arraySeleccionMultipleValores = [];
            arraySeleccionMultipleValores.push($(this).children('h4').text());

            $(this).children('input').each(function (index2) { 
                arraySeleccionMultipleValores.push($(this).attr('value'));
                //alert(index2 +" index2"+$(this).attr('name'));
          
            });
            arraySeleccionMultiple.push(arraySeleccionMultipleValores);
            alert(arraySeleccionMultipleValores.toString()+" valores");          
        });
        arrayTipos.push(arraySeleccionMultiple); 

   /* $.each(arrayTipos , function(key, value) {
        $.each(value , function(ke, valu) {
            $.each(valu , function(k, val) {
                alert(val);
            });
        });
    }); */     
    var data = {consulta:'guardarEvaluacion',datos:arrayTipos};
    var url = '../../Controller/ControladoraEvaluacion.php'

    ajax(url,data);
}

function ajax(url, data){

        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (resp) {      
                alert(resp);        
                
            },
            error: function (jqXHR, estado, error) {
                alert('error log');
                console.log("fallo");
            }
        });
}