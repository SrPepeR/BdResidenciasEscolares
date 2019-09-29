<?php
	
	$file = fopen("residencias.txt", "w");

	fwrite($file, "u00001" . PHP_EOL);
	fwrite($file, "900" . PHP_EOL);
	fwrite($file, "No" . PHP_EOL);

	fwrite($file, "u00002" . PHP_EOL);
	fwrite($file, "901" . PHP_EOL);
	fwrite($file, "No" . PHP_EOL);

	fwrite($file, "u00003" . PHP_EOL);
	fwrite($file, "900" . PHP_EOL);
	fwrite($file, "Sí" . PHP_EOL);
	
	fclose($file);

	header('Location: Formulario.html');

?>