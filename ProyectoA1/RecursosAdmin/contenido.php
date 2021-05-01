<?php

	$op = $_GET['op'];
	switch ($op) {
		case 'Empleados':
			// echo "Este es el inicio de la página";
			// include "paginas/inicio.php";
			$parrafo = $p1;
			include "Empleados.php";
			break;

		case $menu2:
			// echo "Esta es la página de juegos";
			// include "paginas/juegos.php";
			$parrafo = $p2;
			include "paginas/pagina.php";
			break;

		case $menu3:
			 // echo "Esta es la página de películas";
			// include "paginas/peliculas.php";
			$parrafo = $p3;
			include "paginas/pagina.php";
			break;
		
		default:
			include "paginas/404.php";
			break;
	}

?>

