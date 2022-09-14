<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <hr>
    <br>
    <?php
        $mensaje = "Hola Mundo";
        echo $mensaje;
    ?>
    <br>
    <?php
        $var1 = 4;
        $var2 = 6;
    ?>
    <br>
    <?php
        echo "suma: ".($var1+$var2);
    ?>
    <br>
    <?php
        echo "resta: ".($var1-$var2);
    ?>
    <br>
    <?php 
        echo "multiplicacion: ".($var1*$var2);
    ?>
    <br>
    <?php
        $diventera = ($var1/$var2);
        echo "division entera: ".$diventera;
    ?>
    <br>
    <?php
        echo "resto: ".($var1%$var2);
    ?>
    <br>
    <hr>
    <?php
        $grados = 20;
        echo "Celsius: ".$grados."°C";
    ?>
    <br>
    <?php
        echo "Fahrenheit: ".(($grados*1.8)+32). "°C";
    ?>
    <br>
    <hr>
    <?php
        $base = 18;
        $altura = 12;
    ?>
    <br>
    <?php
        echo "perimetro del rectangulo: ". (($base*2)+($altura*2));
    ?>
    <br>
    <?php
        echo "area del rectangulo: ".$base*$altura;
    ?>
    <br>
    <hr>
    <?php
        $radio = 30;
    ?>
    <br>
    <?php
        echo "perimetro del circulo: ". 2*3.1415*$radio;
    ?>
    <br>
    <?php
        echo "area del circulo: ". 3.1415*pow($radio,2);
    ?>


</body>
</html>
    