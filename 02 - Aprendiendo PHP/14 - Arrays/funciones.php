<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 2, 5, 8, 3, 4];

// Ordenacion de Arrays
sort($numeros);

echo '<pre>';
print_r($numeros);
echo '</pre>';

// Añadir elemntos al Array
echo '<hr>';
$cantantes[] = 'Natos';
$cantantes += [5 => 'Natch'];
array_push($cantantes, 'Porta');

echo '<pre>';
print_r($cantantes);
echo '</pre>';

// Eliminar elementos del Array
echo '<hr>';
array_pop($cantantes);
unset($cantantes[2]);

echo '<pre>';
print_r($cantantes);
echo '</pre>';

// Mostrar elementos aleatorios del Array
echo '<hr>';
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta a un array (orden)
echo '<hr>';
$cantantesReverse = array_reverse($cantantes);
var_dump($cantantesReverse);

// Buscar dentro de un Array
echo '<hr>';
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

// Contar elementos dentro de un array
echo '<hr>';
$resultado = count($cantantes);
var_dump($resultado);
