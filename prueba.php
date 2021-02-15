<!--autor: RAÚL  HERNÁNDEZ LÓPEZ
correo: freeenergy1975@gmail.com
fecha: 13 de febrero del 2021-->

<!--Genera un programa que determine si eres de mayor de edad-->

<!DOCTYPE html>
<html>
   <head>
        <title> Mayoria de edad </title>
        <meta charset = "UTF-8">
   </head>
   <body>
   <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <!--Entrada de datos-->
        <h6><label>Ingresa tu edad</label></h6>
        <input type="text" name="edad">
        <br />
        <br />
        <input type="submit">
   </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                //obtencion de datos.
                $edad = $_POST['edad'];               

                //Evalua que el usuario sea mayor de edad.
                if( $edad >= 18 ){
                    echo "Eres mayor de edad.";
                }//Fin if
                else if ( $edad < 18 ){
                    echo "Eres menor de edad.";
                }//Fin else if
                else{
                   echo ("Dato no valido.");
		}//Fin else
       }	
   ?>
   </body>
</html>

