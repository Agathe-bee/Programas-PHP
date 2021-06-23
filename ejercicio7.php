<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Diseñar un código para registrar un dia de la semana y que 
muestre que dia de la semana es-->

<!DOCTYPE html>
<html>
        <head>
                <title>Ejercicio 6</title>
                <meta charset="UTF-8">
        </head>
        <body>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite un dia de la semana (MAYUSCULAS): <input type="text" name="dia">
			<br>
                        <input type="submit">
                </form>
                <?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$day = $_POST['dia'];

				switch ($day){
					case "LUNES":
						echo "LUNES";
					break;
					case "MARTES":
						echo "MARTES";
					break;
					case "MIERCOLES":
						echo "MIERCOLES";
					break;
					case "JUEVES":
						echo "JUEVES";
					break;
					case "VIERNES":
						echo "VIERNES";
					break;
					case "SABADO":
						echo "SABADO";
					break;
					case "DOMINGO":
						echo "DOMINGO";	
					break;
				}
			}
                ?>
       </body>
</html>


