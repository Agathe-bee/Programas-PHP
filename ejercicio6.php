<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Diseñar un código para registrar 3 edades y verificar quien es mayor y menor-->

<!DOCTYPE html>
<html>
        <head>
                <title>Ejercicio 6</title>
                <meta charset="UTF-8">
        </head>
        <body>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digita la primera edad: <input type="text" name="edad1">
			<br>
			Digita la segunda edad: <input type="text" name="edad2">
			<br/>
			Digita la tercera edad: <input type="text" name="edad3">
			<br/> 
                        <input type="submit">
                </form>
                <?php
 			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$anyo1 = $_POST['edad1'];
				$anyo2 = $_POST['edad2'];
				$anyo3 = $_POST['edad3'];

				if ( $anyo1 > $anyo2 && $anyo2 > $anyo3){//Inicio condicional if_else
                                        echo $anyo1." ".$anyo2." ".$anyo3;
                                }
                                        else if( $anyo1 > $anyo3 && $anyo3 > $anyo2){
                                                echo $anyo1." ".$anyo2." ".$anyo3;
                                         }
                                                else if ( $anyo2 > $anyo1 && $anyo1 > $anyo3){
                                                        echo $anyo2." ".$anyo1." ".$anyo3;
                                                }
                                                        else if ( $anyo2 > $anyo3 && $anyo3 > $anyo1){
                                                                echo $anyo2." ".$anyo3." ".$anyo1;
                                                        }
                                                                else if ( $anyo3 > $anyo1 && $anyo1 > $anyo2){
                                                                        echo $anyo3." ".$anyo1." ".$anyo2;
                                                                 }
                                                                        else if ( $anyo3 > $anyo2 && $anyo2 > $anyo1){
                                                                                echo $anyo3." ".$anyo2." ".$anyo1;
                                                                        }//Fin if_else

			}                 
                ?>
       </body>
</html>

