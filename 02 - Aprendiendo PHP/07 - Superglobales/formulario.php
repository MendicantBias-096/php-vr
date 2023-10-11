<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>

<body>
    <h1>Formulario en PHP - GET</h1>

    <form action="recibir.php" method="GET">

        <p>
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellido:</label>
            <br>
            <input type="text" name="apellido">
        </p>

        <button type="submit">Enviar</button>

    </form>

    <hr>

    <h1>Formulario en PHP - POST</h1>

    <form action="recibir.php" method="POST">

        <p>
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellido:</label>
            <br>
            <input type="text" name="apellido">
        </p>

        <button type="submit">Enviar</button>

    </form>
</body>

</html>