<!--Fecha: 04_09_10 -->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--23-Realice un algoritmo para leer las calificaciones de N alumnos 
y de­termine el número de aprobados y reprobados. Represéntelo me­diante 
diagrama de flujo, pseudocódigo.-->

<!DOCTYPE html>
<html>
	<head>
	   <meta charset="UTF-8">
	   <title>CALIFICACIONES</title>
	</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">"
		Ingrese la calificacion del alumno 1: <input type"text" name="alumno_1">
		<br/>
		Ingrese la calificacion del alumno 2: <input type"text" name="alumno_2">
		<br/>
		Ingrese la calificacion del alumno 3: <input type"text" name="alumno_3">
		<br/>
		Ingrese la calificacion del alumno 4: <input type"text" name="alumno_4">
		<br/>
		Ingrese la calificacion del alumno 5: <input type"text" name="alumno_5">
		<br/>
		<input type="submit">
	</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$cambio = 0;
	$aprobados = 0;
	$noAprobados = 0;
	$alumnos = [];
	$i = 0;
	$alumnos[0] = $_POST["alumno_1"];
	$alumnos[1] = $_POST["alumno_2"];
	$alumnos[2] = $_POST["alumno_3"];
	$alumnos[3] = $_POST["alumno_4"];
	$alumnos[4] = $_POST["alumno_5"];

	for ($i = 0; $i < 5; $i++){
		if($alumnos[$i] >= 6){
			echo "<br>Alumno aprobado";
			$aprobados = $aprobados + 1;
		} 
		else{
			echo "<br>Alumno no aprobado ";
			$noAprobados = $noAprobados + 1;
		}
	}
	echo "<br>El total de alumnos aprobados es de ".$aprobados;
	echo "<br>El total de alumnos reprobados es de ".$noAprobados;
}
?>
</body>
</html>
