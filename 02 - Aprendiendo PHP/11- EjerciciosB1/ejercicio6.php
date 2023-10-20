<?php

/*
    EJERCICIO 5:

    Mostrar en una tabal de HTML las tablas de multiplicar del 1 al 10

*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <th>Tabla del <?= $i ?></td>
                    <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <tr>
                    <?php for ($j = 1; $j <= 10; $j++) : ?>
                        <td><?= $j . ' x ' . $i . ' = ' . $i * $j ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>