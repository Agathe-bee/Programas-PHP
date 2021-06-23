<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Diseñe un código para revisar el nombre y contraseña de un usuario para simular
el ingreso a un sistema. El mensaje puede ser "Acceso autorizado" o "acceso denegado"-->

<!DOCTYPE html>
<html>
        <head>
                <title>Ejercicio 4</title>
                <meta charset="UTF-8">
        </head>
        <body>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite su nombre:  <input type="text" name="nombre">
			<br/>
			Digite su contraseña: <input type="text" name="contraseña">
			<br/>
                        <input type="submit">
                </form>
		<?php
			if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
				$name = $_POST['nombre'];
				$psw = $_POST['contraseña'];
				if ( ($name=="Fatima")&&($psw=="skz12")){
					echo "Acceso autorizado, bienveido";
				}
				else {
					echo "Acceso denegado, intente de nuevo";
				}
			}
                ?>
        </body>
</html>
           
