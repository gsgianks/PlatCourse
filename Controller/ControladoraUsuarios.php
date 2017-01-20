<?php
	if(isset($_POST["consulta"])){
		
		switch ($_POST["consulta"]) {
			case 'validarLogin':
			
				if(!empty($_POST["correo"]) && !empty($_POST["pass"])){
					echo "su correo: ".$_POST["correo"]." y su contrseña: ".$_POST["pass"];
				}else{
					echo "Usuario no valido.\n Vuelva a intentar.";
				}
				
				break;
			
			default:
				echo "Error inesperado, intente más tarde :(";
				break;
		}
	}
?>