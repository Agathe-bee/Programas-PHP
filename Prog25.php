<!--Fecha: 14_10_20-->
<!--Autor: Fátima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--25-Realice un algoritmo que determine el sueldo semanal de N trabajadores 
considerando que se les descuenta 5% de su sueldo si ganan entre 0 y 150 pesos.
Se les descuenta 7% si ganan más de 150 pero menos de 300, y 9% si ganan más de
300 pero menos de 450. Los datos son horas trabajadas, sueldo por hora y nombre 
de cada trabajador. Represéntelo mediante diagrama de flujo, pseudocódigo.-->

<!DOCTYPE html>
<html>
	<head>
            <meta charset="UTF-8">
            <title>SUELDO DE N TRABAJADORES</title>
	</head>
<body>
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Ingrese el costo por hora: <input type="text" name="precioHora">
	<br/>
	Ingrese el nombre del trabajador: <input type="text" name="nombre">
	<br/>
	Ingrese las horas trabajadas: <input type="text" name="hTrabajadas">
	<br/>
	Inserte el dinero ganado: <input  type="text" name="dineroGanado">
	<br/>
	<input type="submit">
     </form>

 <?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $name = $_POST["nombre"];
	   $costoHora = $_POST["precioHora"];
	   $horas = $_POST["hTrabajadas"];
	   $dinero = $_POST["dineroGanado"];
	   $sueldoNeto = 0;
	   $sueldoBruto = 0;

	   if ($dinero > 0 && $dinero <= 150){
	   	$sueldoBruto = 40*($dinero/$horas);
		$sueldoNeto = $sueldoBruto-($sueldoBruto*0.05);
	   }
	   elseif ($dinero >150 && $dinero <= 300){
	        $sueldoBruto = 40*($dinero/$horas);
                $sueldoNeto = $sueldoBruto-($sueldoBruto*0.07);

	   }
	   elseif ($dinero >300 && $dinero <= 450){
	        $sueldoBruto = 40*($dinero/$horas);
                $sueldoNeto = $sueldoBruto-($sueldoBruto*0.09);

	   }

	   echo "<br>El sueldo bruto de ".$name." es de ".$sueldoBruto." pesos";
	   echo "<br>El sueldo neto de ".$name." es de ".$sueldoNeto." pesos";
   }
 ?>
</body>
</html>
