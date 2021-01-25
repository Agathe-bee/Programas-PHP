<!--Fecha: 12_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!--Elabora un programa con condicionales anidados que solicite 3 calificaciones, 
obtén el promedio de esas tres calificaciones, y de acuerdo al promedio que 
se obtuvo, coloca la leyenda que le corresponde, que encontraras en la imagen 
que te comparto con el nombre NIVEL DE DESEMPEÑO-TESJI.JPG.  
Por ejemplo si tu promedio se encuentra entre 95 y 100 deberá aparecer la 
leyenda "EXCELENTE" //El documento se encuentra adjunto-->

<!DOCTYPE html>
<html>
	<head>
		<title>Nivel de Desempeño</title>
		<meta charset="UTF-8">
	</head>
	<form>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite la calificaion que obtuvo en Fisica: <input type="text" name="fisica">
			<br/>
			Digite la calificacion que obtuvo en Programacion: <input type="text" name="programacion">
			<br/>
			Digite la calificacion que obtuvo en Historia: <input type="text" name="historia">
			<br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$calificacion_Fisica = $_POST["fisica"];
				$calificacion_Historia = $_POST["historia"];
				$calificacion_Programacion = $_POST["programacion"];
				
				$promedio_General = ($calificacion_Fisica+$calificacion_Historia_$calificacion_Programacion)/3;
				if (( $promedio_General >= 9.5) && ( $promedio_General <= 10.0)){
					echo "EXCELENTE";
				}
					else if (( $promedio_General >= 8.5) && ( $promedio_General <= 9.4)){
						echo "NOTABLE";
					}
						else if (( $promedio_General >= 7.5) && ( $promedio_General <= 8.4)){
							echo "BUENO";
						}
							else if (( $promedio_General >= 7.0) && ( $promedio_General <= 7.4)){												echo "SUFICIENTE";
							
							}
								else if ( $promedio_General <= 7.0){
									echo "DESEMPEÑO INSUFICIENTE";
								}
			}
		?>
	</form>
</html>
