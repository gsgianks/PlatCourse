<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="css/estilo_general.css">
	<link rel="stylesheet" href="css/fonts/style.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
	<?php include_once "_nav.php" ?>

	<main class="login_main">
		<h1><i class="icon-key"></i>Bienvenido a PlatCourse</h1>
		<form name="login" class="form_card">
			<h2>Inicio de sesión</h2>
			<input type="hidden" name="consulta" value="login">
			<input type="email" name="email" placeholder="Ingrese su correo" class="input_redondo_oscuro" required/>
			<input type="password" placeholder="Ingrese su contraseña" class="input_redondo_oscuro" required/>
			<input type="submit" class="button_fill verde_agua" value="Ingresar">
		</form>
	</main>
	<?php include_once "_footer.php" ?>
</body>
</html>
