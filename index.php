<!DOCTYPE html>
<html lang="en">

	<head>
		<title>login</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="csslog.css">

	</head>
	
	<body>
		
		<form action="validar.php" method="post">
			
		<h1>Sistema de login</h1>
		<b><p class="user">Usuario: <input class="name" type="text" placeholder="Ingrese su usuario" name="usuario"></p></b>
		<b><p class="contra">Contraseña: <input class="pass" type="password" placeholder="Ingrese su Contraseña" name="contraseña"></p></b>
		<input class="boton" type="submit" value="Ingresar">

		</form>

	</body>
</html>