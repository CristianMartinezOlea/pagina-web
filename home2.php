<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
	echo '

	<script>
		alert("Por favor deber iniciar sesion");
		window.location = "login.php";
	</script>


	';
	session_destroy();
	die();
}


?>


<!DOCTYPE html>
<html>

	<head>
		<title>TecNoCosta</title>
		<link rel="stylesheet" href="tec.css"> 
		<meta charset="UTF-8"/>
		<link rel="shortcut icon" type="image/x-icon" href="icon/iconoprincipal.ico">
		<link rel="stylesheet" type="text/css" href="tecno.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	
	<body>
		<!--UL son listas desordenadas-->
		<ul>
			<li><a href="menu/menu.html">Menu</a></li>
			<li><a href="mailto:oleamartinez10@gmail.com">Contacto</a></li>
			<li><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
			<li><a href="perfil.html">Perfil</a></li>


		</ul>

		<h1>TecNoCosta </h1>

		<p>
		<b>Esta pagina web se centrara en la venta de articulos tecnologicos , ya sea celulares, accesrios, o todo tipo de componentes.
		Los productos a vender seran nuevos y usados(de gran calidad), ademas contaremos con servicio a domicilio, contamos con los siguientes servicios en venta:
		<b/>
		</p>	
	
		<h2><i>Articulos en venta</i></h2>
		<!--OL son listas ordenadas-->
		<ol>
			<li>Computadoras</li>
			<li>Celulares</li>
			<li>Articulos Gaming</li>
			<li>Articulos para computadoras</li>
			<li>Audifonos</li>
			<li>Memorias SD</li>
		</ol>>
			
		
		<img src="Imagenes/tecnocosta.jpg" alt="Imagen de la tienda" title="Logotipo de la tienda" width="1470" height="1000">
		
		
	</body>
</html>