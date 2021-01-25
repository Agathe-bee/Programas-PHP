<!--Fecha: 11_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!--Genere la tabla de multiplicar de un numero N-->

<!DOCTYPE html>
<html>
	<head>
		<title>Tabla de multiplicar</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			¿Que tabla desea ver?: <input type="text" name="tabla">
			<br/>
			¿Hasta que numero desea ver?: <input type="text" name="numero">
			<br/>
			<input type="submit">
		</form>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$tablas = $_POST["tabla"];
				$tope = $_POST["numero"];

				for ($i = 1; i <= $tope; $i++){
					$resultado = $tablas * $i;
					echo $tabla." x ".$i." = ".$resultado;
					echo "\n";
				}
			}
		?>
	</body>
</html>
