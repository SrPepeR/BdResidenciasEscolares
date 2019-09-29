<!DOCTYPE html>
<html>
<head>
	<title>Residencias escolares</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloVisualizacion.css">
</head>
<body id="body">
	<table border = "2" id="tabla">
		<tr id="encabezados">
			<th>Código de la universidad</th>
			<th>Precio mensual</th>
			<th>Comedor</th>
			<th>Baja</th>
			<th>Modificar</th>
		</tr>
		<?php

			$file = fopen("residencias.txt", "r");
			while (!feof($file)){
				echo "<tr>";
				for($i = 0; $i < 3; $i++){
					$linea = fgets($file);
					if ($linea != "") {
						echo "<td>";
    					echo $linea;
    					echo "</td>";
					}
				}
				if ($linea != "") {
				echo "<td><button id='boton'>Dar de baja</button></td>";
				echo "<td><button id='boton'>Modificar</button></td>";
				}
				echo "</tr>";
			}
			fclose($file);

		?>
		
	</table><br>
	<form action="Formulario.html" method="get" id="altaNueva">
		<button type="submit" id="botonF">Nueva alta</button>
	</form>
	<form action="BorrarResidencias.php" method="get" id="RESET">
		<button type="submit"id="botonF">RESET</button>
	</form>
</body>
</html>