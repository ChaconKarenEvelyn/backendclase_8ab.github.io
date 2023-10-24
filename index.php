<?php
//Ejercicio 1-a

function perimetro ($lado){
    $resultado = ($lado * 4);
    return $resultado;
}

$variable1 = perimetro (5);
echo $variable1;
echo "<br>";

function area ($lado){
    $resultado = ($lado * 2);
    return $resultado;
}

$variable2 = area (3);
echo $variable2;
echo "<br>";

//Ejercicio 1-b

$cadena = "karen Evelyn";
echo strtoupper($cadena);
echo "<br>";

$cadena = "KAREN EVELYN";
echo strtolower($cadena);
echo "<br>";

//Ejercicio 1-c

$número = cal_days_in_month(CAL_GREGORIAN, 11, 2023);
echo "El mes tiene $número días";



?>