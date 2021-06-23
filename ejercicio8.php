<!--Fecha: 26_04_2021-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaaucenamatinez274@gmail.com-->

<!--Diseñar un código para que muestre 15 veces tu nombre, utiliza el
bucle que quieras-->

<!DOCTYPE html>
<html>
        <head>
                <title>Ejercicio 8</title>
                <meta charset="UTF-8">
        </head>
        <body>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digita tu nombre: <input type="text" name="nombre"> 
			<br>
                        <input type="submit">
                </form>
                <?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$name = $_POST['nombre'];

				for ($i = 0; $i < 15 ; $i++){
					echo "$name <br/>";
				}
			}
                ?>
      </body>
</html>
