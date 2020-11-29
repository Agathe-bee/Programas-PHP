<!--Fecha: 24-08-2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--La compañía de autobuses “La curva loca” requiere determinar el costo 
que tendrá el boleto de un viaje sencillo, esto basado en los kilómetros por 
recorrer y en el costo por kilómetro.-->

<!DOCTYPE html>

<html>
        <head>
                <meta charset="UTF-8">
                <title>COSTO BOLETO </title>
        </head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	¿Cuanto es el precio por kilometro?: <input type="text" name="costo">
        <br/>
	¿Cuantos kilometros va a recorrer?: <input type="text" name="kilometros">
        <br/>
	<input type="submit">  
	</form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $precio = $_POST["costo"];
    $distancia = $_POST["kilometros"];

    $resultado = $precio * $distancia;

    echo "El precio del boleto es de: $".$resultado." pesos";
  }
?>
</body>
</html>
