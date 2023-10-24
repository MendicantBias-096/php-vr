<?php

// Funciones Predefinidas en PHP


// Debuguear
echo '<i> Funcion: var_dump() </i><br><br>';
$nombre = 'Victor Robles';
var_dump($nombre);

// Fecha
echo '<hr>';
echo '<i> Funcion: date() </i><br><br>';
echo date('d - m - Y');

// Tiempo
echo '<hr>';
echo '<i> Funcion: time() </i><br><br>';
echo time();

// Matematicas
echo '<hr>';
echo '<i> Funcion: sqrt() Raiz Cuadrada </i><br><br>';
echo sqrt(10);

// Aleatoreo
echo '<hr>';
echo '<i> Funcion: rand() Genera un numero "Aleatorio" </i><br><br>';
echo rand(10, 100);

// Numero PI
echo '<hr>';
echo '<i> Funcion: pi() Numero Pi </i><br><br>';
echo pi();

// Redondear
echo '<hr>';
echo '<i> Funcion: round() Redondear </i><br><br>';
echo round(10.489, 1);

// Obtener Tipo de Variable
echo '<hr>';
echo '<i> Funcion: gettype()  </i><br><br>';
echo gettype($nombre);

// Identificar el tipo de variable
echo '<hr>';
echo '<i> Funcion: is_tipoDato()  </i><br><br>';
if (!is_float($nombre)) {
    echo ' La variable no es un numero con decimales';
}

// Identificar si existe variable
echo '<hr>';
echo '<i> Funcion: isset()  </i><br><br>';
if (!isset($edad)) {
    echo ' La variable no existe';
}

// Limpiar espacios de un string
echo '<hr>';
echo '<i> Funcion: trim()  </i><br><br>';
$frase = '     Mi     Contenido    ';
echo trim($frase);

// Eliminar variables o indices de Arrays
echo '<hr>';
echo '<i> Funcion: unset()  </i><br><br>';
$year = 2020;
unset($year);

// Comprobar variable vacia
echo '<hr>';
echo '<i> Funcion: empty()  </i><br><br>';
$texto = 'FF';
if (empty($texto)) {
    echo 'La variable esta vacia';
} else {
    echo 'La variable no esta Vacia';
}

// Contar contenido de un string
echo '<hr>';
echo '<i> Funcion: strlen()  </i><br><br>';
$cadena = 'Supercalifrajilistico';
echo strlen($cadena);

// Encontrar caracter
echo '<hr>';
echo '<i> Funcion: strpos()  </i><br><br>';
$frase = 'La vida es Bella';
echo strpos($frase, 'vida');

// Reemplazar contenido de un string
echo '<hr>';
echo '<i> Funcion: str_replace()  </i><br><br>';
$frase = 'La vida es Bella';
echo str_replace('vida', 'moto', $frase);

// Convertir a Mayusculas y Minusculas
echo '<hr>';
echo '<i> Funcion: strtolower() & strtoupper()  </i><br><br>';
$frase = 'La vida es Bella';
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);
