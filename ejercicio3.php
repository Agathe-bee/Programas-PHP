<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!--Diseña un código para almacenar 2 números y realizar una suma-->

<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <title>Ejercicio 2</title>
        <head>
        <body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Digita el primer numero: <input type="text" name="num1">
		<br/>
		Digita el segundo numero: <input type="text" name="num2">
		<br/>
		<input type="submit">
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$numero1 = $_POST['num1'];
			$numero2 = $_POST['num2'];
			$suma;

			$suma = $numero1 + $numero2;

			echo "La suma de ".$numero1." + ".$numero2." es igual a ".$suma;
		}
	?>
        </body>
</html>

