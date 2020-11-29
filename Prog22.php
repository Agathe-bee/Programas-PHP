<!--Fecha: 04_09_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--22-Se requiere determinar el costo que tendrá realizar una llamada 
telefónica con base en el tiempo que dura la llamada y en el costo por 
minuto. Realice un diagrama de flujo y pseudocódigo que representen el 
algoritmo para tal fin-->

<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>COSTO LLAMADA</title> 
    </head>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	Ingrese el precio por minuto: <input type="text" name="precioMinuto">
        <br/>
	Ingrese los minutos que tomo su llamada: <input type="text" name="tiempoLlamada">
	<br>
	<input type="submit">
	</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$COSTO = $_POST["precioMinuto"];
	$TIEMPO = $_POST["tiempoLlamada"];

	$resultado = $COSTO*$TIEMPO;

	echo "El costo de su llamada es de: $".$resultado." pesos";
}
?>
</body>
</html>
