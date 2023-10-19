<?php

/* BUCLE FOR

ESTRUCTURA:

for(variable_contador, condicion, incremento_contador){
    bloque de instruccioens
}

*/

$resultado = 0;

for ($i = 0; $i <= 100; $i++) {
    $resultado += $i;
}

echo 'El resultado es : ' . $resultado;
echo '<br>';
