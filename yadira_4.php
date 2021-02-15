<!--Fecha: 25_08_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Genera un programa que determine si la calificación es aprobatoria o no-->

<!DOCTYPE html>
<html>
	<head>
		<title>CALIFICACION</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite su calificacion:  <input type="text" name="promedio">
			<br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$calificacion = $_POST['promedio'];

				if ( $calificacion > 6){
					echo "Tu calificacion es aprobatoria";
				}
				else {
					echo "Tu calificacion no es aprobatoria";
				}
			}
		?>
	</body>
</html>
