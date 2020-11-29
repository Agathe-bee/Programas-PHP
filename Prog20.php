<!--Fecha:24-08-2020 -->
<!--Autor:Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--20-Se requiere determinar el tiempo que tarda una persona en llegar 
de una ciudad a otra en bicicleta, considerando que lleva una velocidad 
constante. Realice un diagrama de flujo y pseudocódigo que representen 
el algoritmo para tal fin.-->

<html>
	<head>
		<meta charset="UTF-8">
		<title>TIEMPO DE LLEGADA</title>
	</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Ingrese los kilometros recorridos <input type="text" name="kRecorridos"/>
        <br/>
	Ingrese los K/H <input type="text" name="kHora"/>
	<br/>
	<input type="submit">
        </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$KRECORRIDOS = $_POST['kRecorridos'];
	$KHORA = $_POST['kHora'];

	$tiempoLlegada = $KRECORRIDOS/$KHORA;

	echo "El tiempo en que tarda en llegar la persona es de: ".$tiempoLlegada." hrs";
}
?>
</body>
</html>
