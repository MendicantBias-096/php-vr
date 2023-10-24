<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>

<body>
    <!-- Cabecera -->
    <?php include('includes/cabecera.php') ?>

    <!-- Contenido -->
    <div class="contenido">
        <h2>Esta es la pagina de Sobre Mi</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>

    <hr>

    <!-- Pie de pagina -->
    <?php include('includes/footer.php') ?>

</body>

</html>