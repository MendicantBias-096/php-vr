<?php

/*
    EJERCICIO 3:

    Escribir un programa que imprima por pantalla los cuadrados (numero multiplicado por si mismo) de
    los primeros 40 numeros naturales

    Utilizar el bucle while
*/

$contador = 0;

while ($contador <= 40) {
    echo 'El cuadrado de ' . $contador . ' es : ';
    echo pow($contador, 2);
    echo '<br>';
    $contador++;
}
