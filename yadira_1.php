<!--Fecha: 25_08_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Solicite la edad y determine si es mayor de edad-->

<!DOCTYPE html>
<html>
	<head>
		<title>E D A D</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite su edad:  <input type="text" name="age">
			<br>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$edad = $_POST['age'];

				if( $edad >= 18 ){
					echo "Eres mayor de edad";
				}
				else {
					echo "Eres menor de edad";
				}
			} 
		?>
	</body>
</html>
