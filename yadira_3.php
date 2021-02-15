<!--Fecha: 25_08_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--UN PROGRAMA SOLICITA QUE SEAN CAPTURADOS TRES DATOS
NUMÉRICOS Y A PARTIR DE ELLOS IMPRIMIRÁ SI EL NÚMERO ES PAR-->

<!DOCTYPE html>
<html>
	<head>
		<title>PAR E IMPAR</title>
		<meta charset="UTF-8">
	</head>	
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite el primer numero: <input type="text" name="valor_1">
			<br>
			Digite el segundo numero: <input type="text" name="valor_2">
			<br/>
			Digite el tercer numero: <input type="text" name="valor_3">
			<br/>
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$numero_1 = $_POST['valor_1'];
				$numero_2 = $_POST['valor_2'];
				$numero_3 = $_POST['valor_3'];

				if ( $numero_1%2 == 0){
                			echo "El número ".$numero_1." es par";
        			}
        			else {
                			echo "El numero ".$numero_1." es impar";
        			}

        			if ( $numero_2%2 == 0){
                			echo "El número ".$numero_2." es par";
        			}
        			else {
                			echo "El numero ".$numero_2." es impar";
        			}

        			if ( $numero_3%2 == 0){
                			echo "El número ".$numero_3." es par";
        			}
        			else {
                			echo "El numero ".$numero_3." es impar";
        			}


			}
		?>	
	</body>
</html>
