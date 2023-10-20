<?php

/* FUNCIONES

    Son conjuntos de instrucciones agrupados por bajo nombre en concreto
    Estas instrucciones pueden reutilizarse simplemente 
    invocando la funcion tantas veces como se
    necesite

    ESTRUCTURA:

    function nombre_funcion(parametros){
        CONJUNTO DE INSTRUCCIONES
    }

    USO: Invocacion de funcion

    nombre_funcion(parametro);

*/

// Ejemplo 1
function muestraNombre()
{
    echo "Victor Robles </br>";
    echo "Antonio Robles </br>";
    echo "Miguel Robles </br>";
    echo "Angel Robles </br>";
}

//Invocacion de  funcion
muestraNombre();
echo '<hr>';
muestraNombre();
echo '<hr>';
muestraNombre();
echo '<hr>';

// Ejemplo 2
function tabla($numero)
{
    echo '<i>Tabla del numero ' . $numero . '</i>';
    echo '<br>';
    echo '<br>';

    for ($i = 1; $i <= 10; $i++) {
        echo $numero . ' x ' . $i . ' = ' . $numero * $i;
        echo '<br>';
    }
}

// Invocacion
$valores = ['numero'];

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

$numero = $_GET['numero'];
tabla($numero);

// Ejemplo 3
echo '<hr>';
function calculadora($numeroA, $numeroB, $negrita = false)
{

    $cadena = '';

    $suma = $numeroA + $numeroB;
    $resta = $numeroA - $numeroB;
    $prod = $numeroA * $numeroB;

    if ($numeroB == 0) {
        $cociente = 'indeterminado';
    } else {
        $cociente = $numeroA / $numeroB;
    }

    $cadena .= '<i>Calculadora Basica</i>';
    $cadena .= '<br>';
    $cadena .= '<hr>';
    $cadena .= 'Suma : ' . $numeroA . ' + ' . $numeroB . ' = ' . $suma;
    $cadena .= '<br>';
    $cadena .= 'Resta : ' . $numeroA . ' - ' . $numeroB . ' = ' . $resta;
    $cadena .= '<br>';
    $cadena .= 'Multiplicación : ' . $numeroA . ' x ' . $numeroB . ' = ' . $prod;
    $cadena .= '<br>';
    $cadena .= 'Division : ' . $numeroA . ' / ' . $numeroB . ' = ' . $cociente;
    $cadena .= '<br>';
    $cadena .= '<br>';

    if ($negrita) {
        $cadena .= 'Negrita no es false';
    } else {
        $cadena .= 'Negrita es false';
    }

    return $cadena;
}

echo calculadora(5, 0, true);


// Ejemplo 4
echo '<br>';
echo '<hr>';

function getNombre($nombre)
{
    $texto = 'Los nombres son ' . $nombre;
    return $texto;
}

function getApellido($apellido)
{
    $texto = 'Los apellidos son ' . $apellido;
    return $texto;
}

function devuelveNombre($nombres, $apellidos)
{
    $texto = getNombre($nombres);
    $texto .= '<br>';
    $texto .= getApellido($apellidos);
    return $texto;
}

echo devuelveNombre('Victor', 'Ronbles');
