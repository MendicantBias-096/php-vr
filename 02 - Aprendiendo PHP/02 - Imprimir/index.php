<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>

<body>
    <h1>Master en PHP - <?php echo 'MendicantBias' ?></h1>

    <?= 'Bienvenido al Curso más grande de PHP' ?>

    <?php

    // Titular de la Sección
    echo '<h3>Listado de Videojuegos:</h3>';

    /*
        Esta es una lista 
        de videojuegos 
        modernos
    */
    echo '<ul>'
        . '<li> GTA </li>'
        . '<li> Fifa </li>'
        . '<li> Mario Bros </li>'
        . '</ul>';

    // Parrafo explicativo
    echo '<p>Esta es ' . '-' . ' la lista de juegos</p>';
    ?>

</body>

</html>