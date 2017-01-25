<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="css/estilo_general.css">
	<link rel="stylesheet" href="css/fonts/style.css">
	<link rel="stylesheet" href="css/Roboto/WebFont/roboto_regular_macroman/stylesheet.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/funciones_validacion_usuarios.js"></script>
</head>
<body>
	<nav>  
	  <ul>
	    <li><a href="" class="center_to_sides">Home</a></li>
	    <li><a href="" class="center_to_sides">Cursos</a></li>
	    <li><a href="GUI/items.php" class="center_to_sides">Crear Prueba</a></li>
	    <li><a href="" class="center_to_sides">Registro</a></li>
	  </ul>
	</nav>
	<main class="login_main">
		<h1><i class="icon-key"></i>Bienvenido a PlatCourse</h1>
		<form name="login" id="fLogin" class="form_card">
			<h2>Inicio de sesión</h2>
			<input type="hidden" name="consulta" value="validarLogin">
			<input type="email" name="correo" placeholder="Ingrese su correo" class="input_redondo_oscuro" required/>
			<input type="password" name="pass" placeholder="Ingrese su contraseña" class="input_redondo_oscuro" required/>
			<input type="submit" class="boton_redondeado br_verde" value="Ingresar">
		</form>
	</main>
	<footer>
	  <p>Plataforma para inpartición de cursos.<br>Versión 1.0 ©2017.</p>
	</footer>	
</body>
</html>
