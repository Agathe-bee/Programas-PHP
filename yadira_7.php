<!--Fecha: 12_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail-->

<!--Elabora un programa que compare 3 numeros
y los ordene de mayor a menor-->

<!DOCTYPE html>
<html>
	<head>
		<title>Comparacion</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite el numero 1: <input type="text" name="a">
			<br/>
			Digite el numero 2: <input type="text" name="b">
			<br/>
			Digite el numero 3: <input type="text" name="c">
			<br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$numero_1 = $_POST['a'];
				$numero_2 = $_POST['b'];
				$numero_3 = $_POST['c'];

			        if ( $numero_1 > $numero_2 && $numero_2 > $numero_3){//Inicio condicional if_else
                			echo $numero_1." ".$numero_2." ".$numero_3;
        			}
                			else if( $numero_1 > $numero_3 && $numero_3 > $numero_2){
                        			echo $numero_1." ".$numero_2." ".$numero_3;
               				 }
                        			else if ( $numero_2 > $numero_1 && $numero_1 > $numero_3){
                                			echo $numero_2." ".$numero_1." ".$numero_3;
                        			}
                                			else if ( $numero_2 > $numero_3 && $numero_3 > $numero_1){
                                        			echo $numero_2." ".$numero_3." ".$numero_1;
                                			}
                                        			else if ( $numero_3 > $numero_1 && $numero_1 > $numero_2){
                                               				echo $numero_3." ".$numero_1." ".$numero_2;
                                       				 }
                                                			else if ( $numero_3 > $numero_2 && $numero_2 > $numero_1){
                                                        			echo $numero_3." ".$numero_2." ".$numero_1;
                                                			}//Fin if_else

			}
		?>
	</body>
</html>
