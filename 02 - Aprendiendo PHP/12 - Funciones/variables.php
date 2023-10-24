<?php

/*
Variables locales:
    Son las que se encuentran definidas dentro de una funcion
    No pueden ser usadas fuera de la duncion
    Solo estan disponibles dentro de la funcion
    Se puede utilizar una varaible local fuera de la funcion solo si la devolvemos (return)

Varaibles globales:
    Son las que se eclaran fuera de una funcion
    Pueden ser utilizadas dentro o fuera de una funcion
*/

// Variable global
$frase = 'No los genios son tan genios, ni los mediocres tan mediocres';

echo '<i> Variable desde la raiz: </i><br><br>';
echo $frase;
echo '<hr>';

// Funcion
function holaMundo()
{
    global $frase;
    echo '<i>' . $frase . '</i>';
    echo '<br>';
    echo '<br>';
    $year = 2019;
    echo '<i>' . $year . '</i>';
}

echo '<i> Variable desde una función: </i><br><br>';
holaMundo();

// Funciones Variables
function buenosDias()
{
    return 'Hola! Buenos dias';
}

function buenasTardes()
{
    return 'Hola! Buenas tardes';
}

function buenasNoches()
{
    return 'Hola! Buenas noches';
}

echo '<hr>';
echo '<i> Funciones Variables </i><br><br>';

$horario = 'Tardes';
$miFuncion = 'buenas' . $horario;
echo $miFuncion();
