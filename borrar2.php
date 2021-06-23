<!--Fecha: 18_05_2021-->
<!--Autor: Fátima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BAJAS</title>
	</head>
	<body>
		<?php
			$conexion=mysql_connect("localhost","root","12345")or die("Problemas en la connexion");
			mysql_select_db("uno",$conexion)or die("Problemas en la selección de la base de datos");
			$registros=mysql_query("Select nombre from alumnos where 
			nombre=$'$_REQUEST[nombre]'", $conexion)or die("Problemas en el select:".mysql_error());
			
			if ($reg=mysql_fetch_array($registros)){
				mysql_query("Delete from alumos where nombre='$_REQUEST[nombre]'",$conexion)or die("Problemas en el select:".mysql_error());
				echo "Se efectuó el borrado del alumnno con dicho nombre.";
			} else{
				echo "No existe un alumno con ese nombre";
			}
			mysql_close($conexion);
		?>
	</body>
</html>


