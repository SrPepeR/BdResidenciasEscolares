<?php
	
	$file = fopen("residencias.txt", "a");
	$codUniversidad = $_GET["codU"];
	$precio = $_GET["precio"];
	$comedor = $_GET["comedor"];

	fwrite($file, "$codUniversidad" . PHP_EOL);
	fwrite($file, "$precio" . PHP_EOL);
	fwrite($file, "$comedor" . PHP_EOL);
	
	fclose($file);

	header('Location: Visualizacion.php');

?>