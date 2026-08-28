<?php

//suma
$num1= 4;
$num2= 7;
$suma = $num1 + $num2;
echo "la suma de $num1 y $num2 es: $suma<br>"; //la suma de 7 y 4 es de 11

//resta 
$num3 = 10;
$num4 = 3;
$resta = $num3 - $num4;
echo "la resta de $num3 y $num4 es: $resta<br>"; //la resta de 10 y 3 es 7

//multiplicacion
$num5 = 5;
$num6 = 6;
$multiplicacion = $num5 * $num6;
echo "la multiplicacion de $num5 y $num6 es: $multiplicacion<br>"; //la multiplicacion de 5 y 6 es 30

//division
$num7 = 20;
$num8 = 4;
$division = $num7 / $num8;
echo "la division de $num7 y $num8 es: $division<br>"; //la division de 20 y 4 es: 5

//potencia 
$base = 2 ;
$exponente = 3;
$potencia = $base ** $exponente; 
echo "La potencia de $base elevado a $exponente es : $potencia<br>"; //La potencia de 2 elevado a 3 es: 8

//modulo 
$num9= 15;
$num10= 4;
$modulo = $num9 % $num10;
echo "El modulo de $num9 y $num10 es: $modulo<br>"; //El modulo de 15 y 4 es: 3

//redondeo 
$numero = 4.6;
$redondeo = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El numero $numero redondeado es: $redondeo<br>"; //El numero redondeado es: 5
echo "El numero $numero redondeado hacia arriba es: $redondeado_arriba<br>"; //El numero redondeado hacia arriba es: 5
echo "El numero $numero redondeado hacia abajo es: $redondeado_abajo<br>"; // El numero redondeado hacia abajo es: 4

//operaciones matematicas #2
echo (5 % 3) . "<br>";    //muestra 2
echo (5 % -3) . "<br>";   //muestra 2
echo (-5 % 3) . "<br>";   //muestra -2
echo (-5 % -3) . "<br>";  //muestra -2

//valor absoluto 
$numero1 = -7;
$valor_absoluto = abs($numero1);
echo "el valor absoluto de $numero1 es: $valor_absoluto<br>"; //el valor absoluto de -7 es: 7

?>