<?php

/*
    EJERCICIO 5:

    Hacer un programa que muestre todos los numeros entre dos numeros que lleguen por la
    URL (GET)

*/

$valores = ['numeroA', 'numeroB'];

if ($_GET) {
    foreach ($valores as $valor) {
        if (!array_key_exists($valor, $_GET)) {
            echo 'Alguno de los numeros solicitados no esta siendo enviado por la URL';
            return;
        }
    }
} else {
    echo 'No hay variables en la URL';
    return;
}

$numeroA = $_GET['numeroA'];
$numeroB = $_GET['numeroB'];

if ($numeroA > $numeroB) {
    for ($i = $numeroB + 1; $i < $numeroA; $i++) {
        echo $i;
        echo '<br>';
    }
} elseif ($numeroA < $numeroB) {
    for ($i = $numeroA + 1; $i < $numeroB; $i++) {
        echo $i;
        echo '<br>';
    }
} else {
    echo 'Numeros iguales';
}
