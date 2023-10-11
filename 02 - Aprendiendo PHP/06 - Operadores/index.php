<?php

// Operadores Aritméticos

echo '<h4>Operadores Aritméticos</h4>';

$numero1 = 55;
$numero2 = 33;

echo 'Suma: ' . ($numero1 + $numero2);
echo '<br>';
echo 'Resta: ' . ($numero1 - $numero2);
echo '<br>';
echo 'Multiplicación: ' . ($numero1 * $numero2);
echo '<br>';
echo 'División: ' . ($numero1 / $numero2);
echo '<br>';
echo 'Residuo o Resto: ' . ($numero1 % $numero2);
echo '<br>';

echo '<hr>';

//Operadores Incremento y Decremento
echo '<h4>Operadores Incremento & Decremento</h4>';

$year = 2019;

// Incremento
// $year = $year + 1;
$year++;
echo 'Incremento: ' . $year;
echo '<br>';

$year = 2019;

// Incremento
// $year = $year - 1;
$year--;
echo 'Decremento: ' . $year;
echo '<br>';

$year = 2019;

// Pre-Incremento
// $year = 1 + $year;
++$year;
echo 'Pre - Incremento: ' . $year;
echo '<br>';

$year = 2019;

// Pre-Decremento
// $year = 1 - $year;
--$year;
echo 'Pre - Incremento: ' . $year;
echo '<br>';

// Operadores de Asignación
echo '<hr>';
echo '<h4>Operadores de asignación</h4>';

$edad = 5;

echo 'Edad: ' . $edad;
echo '<br>';
echo '<br>';

$edad = 5;
// $edad = $edad + 5;
$edad += 5;
echo 'Edad (+=5): ' . $edad;
echo '<br>';

$edad = 5;
// $edad = $edad - 5;
$edad -= 5;
echo 'Edad (-=5): ' . $edad;
echo '<br>';

$edad = 5;
// $edad = $edad * 5;
$edad *= 5;
echo 'Edad (*=5): ' . $edad;
echo '<br>';

$edad = 5;
// $edad = $edad / 5;
$edad /= 5;
echo 'Edad (/=5): ' . $edad;
echo '<br>';
