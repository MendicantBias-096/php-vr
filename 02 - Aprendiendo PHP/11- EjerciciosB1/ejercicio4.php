<?php

/*
    EJERCICIO 4:

    Recoger dos numeros por la URL (Parametro GET) y hacer todas
    las operaciones basicas de una calculadora

    - Suma
    - Resta 
    - Multiplicacion
    - Division
*/


if (isset($_GET['numeroA']) && isset($_GET['numeroB'])) {

    $numeroA = $_GET['numeroA'];
    $numeroB = $_GET['numeroB'];

    $suma = $numeroA + $numeroB;
    $resta = $numeroA - $numeroB;
    $prod = $numeroA * $numeroB;

    if ($numeroB == 0) {
        $cociente = 'indeterminado';
    } else {
        $cociente = $numeroA / $numeroB;
    }

    echo '<i>Calculadora Basica</i>';
    echo '<br>';
    echo '<hr>';
    echo 'Suma : ' . $numeroA . ' + ' . $numeroB . ' = ' . $suma;
    echo '<br>';
    echo 'Resta : ' . $numeroA . ' - ' . $numeroB . ' = ' . $resta;
    echo '<br>';
    echo 'Multiplicación : ' . $numeroA . ' x ' . $numeroB . ' = ' . $prod;
    echo '<br>';
    echo 'Division : ' . $numeroA . ' / ' . $numeroB . ' = ' . $cociente;
} else {
    echo 'Alguno de los numeros solicitados no esta siendo enviado por la URL';
}
