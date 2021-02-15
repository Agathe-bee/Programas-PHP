<!--Fecha: 10_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!---->

<!DOCTYPE html>
<html>
	<head>
		<title>Suma</title>
		<meta charset="UTF-8">
	</head>
	<body>
		 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite el numero 1: <input type="text" name="valor_1">
			<br/>
			Digite el numero 2: <input type="text" name="valor_2">  
			<br/>  
			Digite el numero 3: <input type="text" name="valor_3">  
			<br/>  
			Digite el numero 4: <input type="text" name="valor_4">  
			<br/>  
			Digite el numero 5: <input type="text" name="valor_5">  
			<br/>  	
			<input type="submit">
		</form>
		<?php
			if ($_SERVER ['REQUEST_METHOD'] == "POST"){
				$numero_1 = $_POST['valor_1'];
				$numero_2 = $_POST['valor_2'];
				$numero_3 = $_POST['valor_3'];
				$numero_4 = $_POST['valor_4'];
				$numero_5 = $_POST['valor_5'];
			
				$suma = $numero_1 + $numero_2 + $numero_3 + $numero_4 + $numero_5

				echo "La sumatoria es de: ".$suma
			}
		?>
	</body>
</html>
