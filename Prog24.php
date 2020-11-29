<!--Fecha: 13_10_20-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--La CONAGUA requieredeterminar el pago que debe de realizar 
una persona por el total de metros cubicos que consume de agua-->

<!DOCTYPE html>
<html>
     <head>
	<meta charset="UTF-8">
        <title>CONSUMO DE AGUA</title>
     </head>
<body>
    <form method="post" action="<?php echo $_SERVER ['PHP_SELF'];?>">
	Inserte el precio pr metro cubico: <input type="text" name="precio">
        <br/>
	Inserte los metros cubicos que ha consumido: <input type="text" name="consumido">
        <br/>
	<input type="submit">
   </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    	$costo = $_POST["precio"];
	$consumo = $_POST["consumido"];
	
	$resultado = $costo*$consumo;
	echo "El total a pagar los ".$consumo." metros cubicos es de: $".$resultado." pesos";
    }
?>
    </form>
</body>
</html>
