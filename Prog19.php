<!--Fecha: 02_09_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--18-Se desea saber el total de una caja registradora de un almacén, 
se conoce el número de billetes y monedas, así como su valor. Realice
un algoritmo para determinar el total. Represente la solución mediante 
|el diagrama de flujo, el pseudocódigo.-->

<!DOCTYPE html>
<html>
     <head>
        <meta charset="UTF-8">
        <title>CAJA REGISTRADORA</title>
     </head>
<body>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	¿Cuantos billetes de $1000 pesos tiene?: <input type="text" name="mil">
	<br/>
	¿Cuanto billetes de $500 pesos tiene?: <input type="text" name="quiniento">
	<br/>
	¿Cuantos billetes de $200 pesos tiene?: <input type="text" name="doscientos">
	<br/>
	¿Cuantos billetes de $100 pesos tiene?: <input type="text" name="cien">
	<br/>
	¿Cuantos billetes de $50 pesos tiene?: <input type="text" name="cincuenta">
	<br/> 
	¿Cuantos billetes de $20 pesos tiene?: <input type="text" name="veinte">
	<br/>
	¿Cuantas monedas de $10 pesos tiene?: <input type="text" name="diez">
	<br/>
	¿Cuantas monedas de $5 pesos tiene?: <input type="text" name="cinco">
	<br/>
	¿Cuantas monedas de $2 pesos tiene?: <input type="text" name="dos">
	<br/>
	¿Cuantas monedas de $1 peso tiene?: <input type="text" name="uno">
	<br/>
	¿Cuantas monedas de $50 centavos tiene?: <input type"text" name="cincuentaCentavos">
	<br/>
	¿Cuantas monedas de $20 centavos tiene?: <input type="text" name="diezCentavos">
	<br/>
	¿Cuantas monedas de $10 centavos tiene?: <input type="text" name="diezCentavos">
	<br/>
        <input type="submit">

<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
        $MIL = $_POST["mil"];
        $QUINIENTOS = $_POST["quinientos"];
        $DOSCIENTOS = $_POST["doscientos"];
        $CIEN = $_POST["cien"];
        $CINCUENTA = $_POST["cincuenta"];
        $VEINTE = $_POST["veinte"];
        $DIEZ = $_POST["diez"];
        $CINCO = $_POST["cinco"];
        $DOS = $_POST["dos"];
        $UNO = $_POST["uno"];
        $CINCUENTACENTAVOS = $_POST["cincuentaCentavos"];
        $VEINTECENTAVOS = $_POST["veinteCentavos"];
        $DIEZCENTAVOS = $_POST["diezCentavos"];

	$resultado = ($MIL*1000)+($QUINIENTOS*500)+($DOSCIENTOS*200)+($CIEN*100)+($CINCUENTA*50)+($VEINTE*20)+($DIEZ*10)+($CINCO*5)+($DOS*2)+($UNO*1)+($CINCUENTACENTAVOS*0.50)+($VEINTECENTAVOS*0.20)+($DIEZCENTAVOS*0.10);

	        echo "El total almacenado en la caja es de: $".$resultado." pesos";
}
?>
</body>
</html>
