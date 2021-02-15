<!--Fecha: 08_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!--Genere el factorial de un numero-->

<!DOCTYPE html>
<html>
	<head>
		<title>Factorial</title>
		<meta charset="UTF-8">
	</head>
	</body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite un numero: <input type="text" name="numero">
			<br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$valor = $_POST ['numero'];
				$numero_Factorial = 1;
				
				for ($i = 1; $i <= $valor; $i++){
					$numero_Factorial = $numero_Factorial * $i;
				}	
				echo "El factorial de ".$i." es: ".$numero_Factorial;
			}
		?>


	<body>
</html>

