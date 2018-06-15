<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include_once ('temas-funciones.php');
$_GLOBALS["Materia"] = "Redes y Telecomunicaciones";
?>
<style type="text/css">
	.menu {
		position: relative;
		top: 20px;
		left: 60px;
	}

	.menu ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    background-color: #333333;
	}

	.menu li {
	   float: left;
	}

	.menu li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 8px;
	    text-decoration: none;
	}

	.menu li a:hover {
	    background-color: #bddbf9;
	    color: #000000;
	}

	.contenedor {
		width: 1200px;
		height: auto;
		margin: 0 auto;
	}
	.encabezado {
		text-align: center;
		margin: 0 auto;
		width: 1200px;
		background-color: #000000;
	}
	.temas {
		float: left;
		width: 300px;
		height: 600px;
		background-color: #f0f0f0;
	}
	.cuerpo {
		float: left;
		width: 700px;
		height: 600px;
		background-color: #ffffff;
	}

	.chat {
		float: left;
		width: 200px;
		height: 600px;
		background-color: #C0C0C0;
	}

	header {
		width: 1200px;
		height: 60px;
		background-color: #78b5f1;
	}

	.usuario {
		float: right;
	}
</style>
<div class="contenedor">
	<header>
		<div class="menu">
		<ul>
  			<li><a href="#home">Inicio</a></li>
			<li><a href="#contact">Carreras</a></li>
			<li><a href="#about">Materias Cursadas</a></li>
		</ul>
		</div>

		<div class="usuario">Usuario</div>
	</header>
	<div class="encabezado">
		Materia
	</div>
	<div class="temas">
		<center>Categor&iacute;as</center>
		<?php cargar_categorias($_GLOBALS["Materia"])?>
	</div>
	<div class="cuerpo">
		contenido de la pagina
	</div>
	<aside class="chat">
		chat de la pagina
	</aside>

</div>
</body>
</html>