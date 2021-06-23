<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Diseñe un código para promediar 3 calificaciones y verificar si su promedio es 
aprobatorio con la minima de 6 si no es reprobado-->

<!DOCTYPE html>
<html>
        <head>
                <title>Ejercicio 5</title>
                <meta charset="UTF-8">
        </head>
        <body>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        Digite la calificación de Programación:  <input type="text" name="cal1">
			<br/>
			Digite la calificación de Física: <input type="text" name="cal2">
			<br/>
			Digite la calificación de Cálculo: <input type="text" name="cal3">
			<br/>
                        <input type="submit">
                </form>
                <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$calificacion_1 = $_POST['cal1'];
				$calificaion_2 = $_POST['cal2'];
				$calificacion_3 = $_POST['cal3'];
				$promedio;

				$promedio = ($calificacion_1 + $calificacion_2 + $calificacion_3)/3;

				if ($promedio >= 6){
					echo "Alumno aprobado";
				}
				else {
					echo "Alumno reprobado";
				}

                        }
                ?>
        </body>
</html>

