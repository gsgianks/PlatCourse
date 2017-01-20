$(document).ready(function(){
    $("#fLogin").submit(function(e){
    	e.preventDefault();
        if(isEmail(this.correo.value)){
        	verificarUsuario($("#fLogin").serializeArray());
        }else{
        	alert("Por favor, asegurese de haber escrito correcto su correo.");
        }
    });

    function isEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}

	function verificarUsuario(datos){
		$.ajax({
		    url:"Controller/ControladoraUsuarios.php",
		    type:'POST',
		    data:datos,
		    success: function(responseText){
      			alert(responseText);
      			location.href="GUI/Evaluacion/ModuloEvaluaciones.php";
      		}
		});
	}

});