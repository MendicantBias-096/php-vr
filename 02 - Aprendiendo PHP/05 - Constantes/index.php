<?php

/*
CONSTANTES.
    Se trata de un contenedor de información que no puede variar
*/

define('nombre', 'Victor');
define('web', 'Victor.com');

echo '<h1>' . nombre . '</h1>';
echo '<h1>' . web . '</h1>';

// Variable
$web = 'victor.com/cursos';
$web = 'victor.com/master';

echo '<h1>' . $web . '</h1>';

// Constantes Predefinidas
echo PHP_VERSION;
echo '<br>';
echo PHP_OS;
