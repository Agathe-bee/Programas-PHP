<!--Fecha: 17_05_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insertar base de datos</title>
	</head>
	<body>
		<?php
			$conexion=mysql_connect("localhost","root","1234")or die("Problemas en la conexion");
			mysql_select_db("uno",$conexion) or die ("Problemas en la seleccion de la basa de datos");
			mysql_query("Insert into alumnos(nombre,direccion,telefono)values
				('$_REQUEST[nombre],'$_REQUES[direccion]','$_REQUEST[telefono]')",
				$conexion)or die ("Problemas en elselect".mysql_error());

			mysql_close($conexion);
			echo "El alumno fue dado de alta";
		?>
	</body>
</html>

