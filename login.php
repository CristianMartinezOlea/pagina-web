<?php

	session_start();
	if (isset($_SESSION['usuario'])) {
		header("location: home2.php");
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/loginestilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="icon/loginicono.ico">
	<title>Login y Registro</title>
</head>
<body 	background="imagenes/login fondo.jpg">
	
	<main>
		
		<div class="contenedor__todo">
			
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<br/>
					<p>Registrate para que puedas iniciar sesion</p>
					<br/>
					<button id="btn__iniciar-sesion">Iniciar sesion</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aun no tienes una cuenta?</h3>
					<br/>
					<p>Inicia sesion para entrar a la pgina</p>
					<br/>
					<button id="btn__registrarse">Registrarse</button>
				</div>
			</div>
			<!-- Formulario de login y registro -->
			<div class="contenedor__login-register">
				<!-- Login -->
				<form action="php/login_usuario_be.php" method="POST" class= "formulario__login">
				
				<h2>Iniciar sesion</h2>
				<input type="text" placeholder="Correo Electronico" name="correo">
				<input type="password" placeholder="Contraseña" name="contrasena">
				<button>Entrar</button>					

				</form>
				<!-- Registro -->
				<form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
					
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre Completo" name="nombre_completo">
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="text" placeholder="Usuario" name="usuario">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Registrarse</button>

				</form>
			</div>

		</div>

	</main>

	<script src="js/scrip.js"></script>


</body>
</html>