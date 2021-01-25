<!--Fecha: 11_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!-- EN UNA TIENDA DEPARTAMENTAL ESTA PUBLICANDO NUEVAS OFERTAS POR
TEMPORADA NAVIDEÑA. SI LOS CLIENTES PRESENTAN UNA TARJETA DE CLIENTE FRECUENTE.
LES OTORGARÁN UN DESCUENTO DEL 20% DEL TOTAL DE SU COMPRA.-->

<!DOCTYPE html>
<html>
	<head>
		<title>Tarjeta</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite el precio de la venta 1:<input type="text" name="valor_1">
			<br/>
			Digite el precio de la venta 2:<input type="text" name="valor_2">
                        <br/>
			Digite el precio de la venta 3:<input type="text" name="valor_3">
                        <br/>
			Digite el precio de la venta 4:<input type="text" name="valor_4">
                        <br/>
			Digite el precio de la venta 5:<input type="text" name="valor_5">
			<br/>
			¿Cuenta con tarjeta de cliente frecuente: <input type="text" name="tarjeta">
			<br/>
			<label for="opcion"><br/>
     			Opciones:</label>
    			<select name="opcion" id="opcion">
     				<option value="1">Si</option>
     				<option value="2">No</option>
   			</select>
  			 <br/>
   			<input type"submit" name="Enviar" id="Enviar" value="Enviar"/>
   			<label for="resultado">
		</form>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$opciones = $_POST["opcion"];
				$venta_1 = $_POST["valor_1"];
				$venta_2 = $_POST["valor_2"];
				$venta_3 = $_POST["valor_3"];
				$venta_4 = $_POST["valor_4"];
				$venta_5 = $_POST["valor_5"];
				$suma_Venta = 0;
				if( $opcion == 1){
					$suma_Venta = $venta_1 + $venta_2 + $venta_3 + $venta_4 + $venta_5;
					$suma_Venta = $suma_Venta - ($suma_Venta*0.20);
					echo "El total a pagar es: $".$suma_Venta." pesos";
				}
				else if ( $opcion == 2){
					$suma_Venta = $venta_1 + $venta_2 + $venta_3 + $venta_4 + $venta_5;
					echo "El total a pagar es: $".$suma_Venta." pesos";
				}
			}
		?>
	</body>
</html>
