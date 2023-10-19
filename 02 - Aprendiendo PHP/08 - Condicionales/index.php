<?php
// Condicionales

/* CONDICIONAL: IF
    ESTRUCTURA 

    if(condicion){
        instrucciones
    }else{
        otras instrucciones
    }

    // Operadores de Comparación

    == Igual
    === Exactamente el mismo (incluyendo el tipo de dato)
    !=  Distinto
    <> Distinto
    !== No exactamente el mismo
    < Menor que
    > Mayor que
    <= Menor o igual que
    >= Mayor o igual que

    // Operadores Logicos

    && AND Y
    || OR O
    ! NOT NO
    and, or
*/

$color = 'rojo';

if ($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}

echo '<hr>';

$year = 2019;

if ($year == 2019) {
    echo 'Estamos en 2019';
} else {
    echo 'No estamos en 2019';
}

echo '<hr>';

$year = 2028;

if ($year < 2019) {
    echo 'Estamos en un año anterior a 2019';
} else {
    echo 'Estamos en un año posterior a 2019';
}

echo '<hr>';

$year = 2018;

if ($year != 2019) {
    echo 'Estamos en un año distinto a 2019';
} else {
    echo 'Estamos en 2019';
}

echo '<hr>';

$year = 2020;

if ($year >= 2019) {
    echo 'Estamos en un año de 2019 en adelante';
} else {
    echo 'Estamos en un año anterior 2019';
}

echo '<hr>';

$nombre = 'David Extremadura';
$continente = 'Asia';
$ciudad = 'Madrid';
$edad = 20;
$mayoria_de_edad = 18;

if ($edad >= $mayoria_de_edad) {
    echo $nombre . ' es mayor de edad';

    if ($continente == 'Europa') {
        echo ' y es de ' . $ciudad;
    } else {
        echo ' y no es de Europa';
    }
} else {
    echo $nombre . ' es menor de edad y es de ' . $ciudad;
}

echo '<hr>';

$dia = 2;

if ($dia == 1) {
    echo 'Es lunes';
} else {
    if ($dia == 2) {
        echo 'Es martes';
    } else {
        if ($dia == 3) {
            echo 'Es miercoles';
        } else {
            if ($dia == 4) {
                echo 'Es jueves';
            } else {
                if ($dia == 5) {
                    echo 'Es viernes';
                } else {
                    echo 'Es fin de Semana';
                }
            }
        }
    }
}

echo '<hr>';

if ($dia == 1) {
    echo 'Es Lunes';
} elseif ($dia == 2) {
    echo 'Es Martes';
} elseif ($dia == 3) {
    echo 'Es Miercoles';
} elseif ($dia == 4) {
    echo 'Es Jueves';
} elseif ($dia == 5) {
    echo 'Es Viernes';
} elseif ($dia == 2) {
    echo 'Es Fin de Semana';
}

echo '<hr>';

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo 'Esta en edad de trabajar';
} else {
    echo 'No esta en edad de trabajar';
}

echo '<hr>';

$pais = 'Francia';

if ($pais == 'México' || $pais == 'España' || $pais == 'Colombia') {
    echo 'En este pais se habla español';
} else {
    echo 'No se habla español';
}

echo '<hr>';

echo '<i>Ejemplo de un  SWITCH</i>';
echo '<br>';
echo '<br>';

$dia = 10;

switch ($dia) {
    case 1:
        echo ' Es Lunes';
        break;
    case 2:
        echo ' Es Martes';
        break;
    case 3:
        echo ' Es Miercoles';
        break;
    case 4:
        echo ' Es Jueves';
        break;
    case 5:
        echo ' Es Viernes';
        break;
    default:
        echo ' Es Fin de Semana';
        break;
}

// GO TO

echo '<hr>';

goto marca;

echo '<i>Instruccion 1</i>';
echo '<i>Instruccion 2</i>';
echo '<i>Instruccion 3</i>';
echo '<i>Instruccion 4</i>';

marca:
echo 'Invocado desde un <i>goto</i>';
