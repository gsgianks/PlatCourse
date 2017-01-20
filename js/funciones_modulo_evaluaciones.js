$(document).ready(function(){
	 $("#fEvaluacion").submit(function(e){
    	e.preventDefault();
        if(this.nombreEvaluacion.value.trim().length != 0 && this.tiempo.value.trim().length){
        	agregarEvaluacion($("#fEvaluacion").serializeArray());
        }else{
        	alert("Por favor, complete los campos.");
        }
    });

	function agregarEvaluacion(datos){
		$.ajax({
		    url:"../../Controller/ControladoraEvaluacion.php",
		    type:'POST',
		    data:datos,
		    success: function(responseText){
      			alert(responseText);
      			location.href="ModuloEvaluaciones.php";
      		}
		});
	}
	 $(".fabAddEvaluacion").on("click",function(e){
	 	e.preventDefault();
	 	mostr_ocultr("."+this.getAttribute("href"));
	 });

	 $("#cancelFEvaluacion").on("click",function(e){
	 	e.preventDefault();
	 	mostr_ocultr("."+$(this).attr("data-form"));
	 	limpiar_form("#"+$(this).attr("data-form"))
	 });

	function mostr_ocultr(id){
		
        if ( $(id).is(":visible")){
             $(id).fadeOut("slow");
           
        }else{
            $(id).fadeIn("slow");
        }
    }

    function limpiar_form(id){
    	$(id).each (function(){
  			this.reset();
		});
    }

    /*LLevar al link del disenador evaluaciones*/
    $(".linkPregunta").on("click", function(e){
    	e.preventDefault();
    	recargar_pagina_endiv("#mainModEvaluacion", "DisenadorEvaluaciones.php");
    });

    function recargar_pagina_endiv(contenedorDeCarga, linkACargar){
    	$(contenedorDeCarga).load(linkACargar);
    	$(contenedorDeCarga).fadeIn(1000);
    }

	$(".btn_cerrar").on("click", function(){
		//mostr_ocultr("#"+$(this).attr("data-idcerrar"));
		alert("kshdbcklsjd");
    });   
    $(".btn_tipo_pregunta").on("click", function(){
    	alert("khh");
    }) ;
});
