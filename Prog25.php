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
     Inserte el precio por hora: <input type="text" name="hora">
     <br/>
     Inserte el numero de trabajadores: <input type="text" name="trabajadores">
     <br/>
     <input type="submit">

 <?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $PRECIO = $_POST["hora"];
	   $NUMERO = $_POST["trabajadores"];
	   $nombre = " ";
           $hTrabajadas = " ";
	   $dineroGanado = " ";

	   for($i = 1; $i <= $NUMERO; $i++ ){
               echo "<br/>Inserte el nombre del trabajador: ".$nombre.": ";
 	       echo "<br/>Inserte las horas trabajadas: ".$hTrabajadas.": ";
	       echo "<br/>Inserte el dinero ganado: ".$dineroGanado.": ";	

		       if (($dineroGanado >0)&&($dineroGanado<=150)){
			       $sueldoBruto=40*($dineroGAnado/$hTrabajadas);
			       $sueldoNeto=$sueldoBruto-($sueldoBruto*0.05);
	               }else if (($dineroGanado>150)&&($dineroGanado<=300)){
			       $sueldoBruto=40*($dineroGanado*$hTrabajadas);
			       $sueldoNeto=$sueldoBruto-($sueldoBruto*0.07);
		       }else if (($dineroGanado>300)&&($dineroGanado<=450)); 
	        echo "<br/>El sueldo bruto de ".$nombre." es de: ".$sueldoBruto." pesos";
		echo "<br/>El sueldo neto de ".$nombre." es de: ".$sueldoNeto." pesos";	
	   }
   }
 ?>
</body>
</html>
