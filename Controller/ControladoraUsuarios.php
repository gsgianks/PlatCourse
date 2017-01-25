<?php
    require_once "../Logic/LogicaLogin.php";
	
	if(isset($_REQUEST["consulta"])){
		
		switch ($_REQUEST["consulta"]) {
			
			case 'validarLogin':
				
				$logicaLogin = new LogicaLogin();
				echo $logicaLogin->validarUsuario($_REQUEST["correo"], $_REQUEST["pass"]);
				
				break;
			
			default:
				echo "Error inesperado, intente más tarde :(";
				break;
		}
	}
?>