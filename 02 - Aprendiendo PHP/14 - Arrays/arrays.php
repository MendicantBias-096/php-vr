<?php

/**
 *  ARRAYS
 * 
 * Se trata de coleccion o un conjunto de datos / valores, bajo un unico
 * nombre, para acceder a esos valores necesitamos usar un indice numerico o alfanumerico
 *
 */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
var_dump($peliculas[1]);

echo '<hr>';

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
var_dump($cantantes);

echo '<hr>';
echo $peliculas[0];
echo '<br>';
echo $cantantes[2];

// Recorrer un Array | Bucle For
echo '<hr>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>' . $peliculas[$i] . '</li>';
}
echo '</ul>';

// Recorrer un Array | Bucle For
echo '<hr>';
echo '<ul>';
foreach ($cantantes as $key => $cantante) {
    echo '<li>' . $cantante . '</li>';
}
echo '</ul>';

// Array Asociativo
echo '<hr>';
$personas = [
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'victorroblesweb.com',
];

var_dump($personas);
echo '<br>';
echo $personas['nombre'];

// Array Multidimencional
echo '<hr>';
$contactos = [
    [
        'nombre' => 'Antonio',
        'email' => 'antonio@test.com'
    ],
    [
        'nombre' => 'Luis',
        'email' => 'luis@test.com'
    ],
    [
        'nombre' => 'Salvador',
        'email' => 'salvador@test.com'
    ],
];

// echo '<pre>';
// print_r($contactos);
// echo '</pre>';

foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'];
    echo '<br>';
}
