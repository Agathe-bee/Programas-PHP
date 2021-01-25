<!--Fecha: 12_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail-->

<!--DESCRIPCIÓN : CALCULAR EL PROMEDIO DE LAS EDADES DEL GRUPO DE PRIMER SEMESTRE-->

<!DOCTYPE html>
<html>
	<head>
		<title>Promedio Edades</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite la edad del alumno 1: <input type="text" name="a">
			<br/>
			Digite la edad del alumno 2: <input type="text" name="b">
                        <br/>
			Digite la edad del alumno 3: <input type="text" name="c">
                        <br/>
			Digite la edad del alumno 4: <input type="text" name="d">
                        <br/>
			Digite la edad del alumno 5: <input type="text" name="e">
                        <br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$alumno_1 = $_POST["a"];
				$alumno_2 = $_POST["b"];
				$alumno_3 = $_POST["c"];
				$alumno_4 = $_POST["d"];
				$alumno_5 = $_POST["e"];

				$suma_Edades = ($alumno_1 + $alumno_2 + $alumno_3 + $alummo_4 + $alumno_5)/5;

				echo "El porcentaje de las edades es de: ".$suma_Edades;
			}
		?>
	</body>
</html>
