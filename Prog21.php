<!--Fecha: 14_10_2020-->
<!--Autor: Fatima Azucena MC-->
<!--fatimaAzucenamartinez274@gmail.com-->

<--Un vendedor ha realizado N ventas y desea saber cuntas fueron por 10000 o menos, cuantas 
fueron por ms de 10000 pero por menos de 20000, y cunto fue el monto de las ventas de cada 
una y el monto global. Realice un algoritmo para determinar los totales-->
<html>
        <head>
                <meta charset="UTF-8">
                <title>Ventas</title>
         </head>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Ingrese el monto de la venta 1: <input type="text" name="venta_1">
        <br/>
        Ingrese el monto de la venta 2: <input type="text" name="venta_2">
        <br/>
        Ingrese el monto de la venta 3: <input type="text" name="venta_3">
        <br/>
        Ingrese el monto de la venta 4: <input type="text" name="venta_4">
        <br/>
        Ingrese el monto de la venta 5: <input type="text" name="venta_5">
        <br/>
        <input type="submit">
        </form>
<?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cambio = 0;
        $mayor = 0;
        $menor = 0;
        $montoGlobal = 0;
        $sumaMayor = 0;
        $sumaMenor = 0;
        $i = 0;
        $ventas = [];
        $ventas[0] = $_POST ["venta_1"];
        $ventas[1] = $_POST ["venta_2"];
        $ventas[2] = $_POST ["venta_3"];
        $ventas[3] = $_POST ["venta_4"];
        $ventas[4] = $_POST ["venta_5"];

        for ($i = 0; $i < 5 ;$i++){
                $cambio = $cambio +1;
                $montoGlobal = $montoGlobal + $ventas[$i];

                if ($ventas[$i] > 0 && $ventas[$i] <= 10000){
                        $sumaMenor = $sumaMenor + $ventas[$i];
                        $menor = $menor + 1;
                }
                elseif ($ventas[$i] > 10000 && $ventas[$i] <= 20000){
                        $sumaMayor = $sumaMayor + $ventas[$i];
                        $mayor = $mayor + 1;
                }
               
        }
        echo "Usted a realizado ".$menor." ventas menores a 10000 y el total de ellas es de: ".$sumaMenor." pesos";
        echo "Usted a realizado ".$mayor." ventas mayores a 1000 pero menores a 20000 y la suma de estas es de ".$sumaMayor." pesos";
        echo "El monto globla es de ".$montoGlobal." pesos";
     } 

?>
</body>
</html>
