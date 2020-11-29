<!--Fecha: 04_09_10 -->
<!--Autor: Fatima Azucena MC-->
<!--fatimaazucenamartinez274@gmail.com-->

<!--23-Realice un algoritmo para leer las calificaciones de N alumnos 
y de­termine el número de aprobados y reprobados. Represéntelo me­diante 
diagrama de flujo, pseudocódigo.-->

<!DOCTYPE html>
<html>
	<head>
	   <meta charset="UTF-8">
	   <title>CALIFICACIONES</title>
	</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
    Ingrese la cantidad de calificaciones a calificar: <input type="text" name="calificacion">
    <br/>
    <input type="submit">
    </form>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
	  $cantidad = $_POST["calificacion"];
	  $reprobados = 0;
	  $aprobados = 0;

	  for($i = 1; $i <= $cantidad; $i++){
		  print ("<br/>Ingrese la calificacion del alumno: ".$calificacion);
		  
		  if($calificacion > 6.0){
		     $aprobados++;
		  } else{
		     $reprobados++;
		  }
	  }   
	  echo "<br/>Hubo ".$aprobados." alumnos aprobados y ".$reprobados." reprobados"; 
  }
?>
</body>
</html>
