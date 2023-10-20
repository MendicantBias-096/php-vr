<?php

/*
    EJERCICIO 2:
    Escribir un script en PHP que nos muestre por pantalla todos los numeros pares que hay
    del 1 al 100
*/

$contador = 1;

while ($contador <= 100) {

    if ($contador % 2 == 0) {
        echo $contador;
        echo '<br>';
    }

    $contador++;
}
