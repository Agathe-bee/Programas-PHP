<!--Fecha: 25_08_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--16-Realice un algoritmo que, con base en una calificación proporciona­da (0-10), 
indique con letra la calificación que le corresponde: 10 es “A”, 9 es “B”, 8 es “C”,
7 y 6 son “D”, y de 5 a 0 son “F”. Represente el diagrama de flujo, el pseudocódigo 
correspondiente.-->

<!DOCTYPE html>
<html>
	<head>
           <title> prueba 1</title> 
           <meta charset="UTF-8">
        </head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 INGRESA TU CALIFICACION: <input type="text" name="calificaciones">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mensaje = "Tu calificacion es :";
  $calificacion = $_POST['calificaciones'];
  if ($calificacion == 10) {
    echo $mensaje . " A sigue asi!";
  }
  elseif ($calificacion == 9) {
    echo $mensaje . " B bien echo";
  }
  elseif ($calificacion == 8) {
    echo $mensaje . " C genial!";
  }
  elseif (($calificacion == 7) or ($calificacion == 6)) {
   echo $mensaje . " D bien";
  }
  elseif (($calificacion <= 5) and($calificacion >= 1)) {
   echo $mensaje . " F Estas reprobado!";
  } else {
   echo " Ingresa un valor valido\n";
  }
}
?>

</body>
</html>
