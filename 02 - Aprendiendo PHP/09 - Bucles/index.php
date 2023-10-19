<?php

/* BUCLE WHILE
    
    Estructura de Control que itera o repite la ejecucion de  una serie de instrucciones
    tantas veces como sea necesario

    ESTRUCTURA:

    while(condición){
        bloque de instrucciones
    }
*/

$numero = 0;
while ($numero <= 100) {
    echo $numero;
    if ($numero != 100) {
        echo ',';
    }
    $numero++;
}

echo '<hr>';

if (isset($_GET['numero'])) {
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}

echo '<h1>Tabla de multiplicar del número ' . $numero . '</h1>';

$contador = 0;

while ($contador <= 10) {
    echo $numero . ' X ' . $contador . ' = ' . $numero * $contador;
    $contador++;
    echo '<br>';
}

/* BUCLE Do WHILE
    
    Estructura de Control que ejecuta una serie de instrucciones al menos una vez
    despues de eso, comprobara si una condicion se cumple y con base en ello
    continuara iterando

    ESTRUCTURA:

    do {
        bloque de instrucciones
    }while(condición)
*/

echo '<hr>';

$edad = 18;
$contador = 1;
do {
    echo 'Tiene acceso al local privado ' . $contador;
    echo '<br>';
    $contador++;
} while ($edad >= 18 && $contador <= 10);
