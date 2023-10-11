<?php

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// Recibiendo datos por GET

echo '<h1>Recibiendo datos por GET</h1>';

echo '<h3> $_GET[\'nombre\'] $_GET[\'apellido\'] </h3>';
echo '<h3>' . $_GET['nombre'] . $_GET['apellido'] . '</h3>';

echo '<hr>';

// Recibiendo datos por POST

echo '<h1>Recibiendo datos por POST</h1>';

echo '<h3> $_POST[\'nombre\']  $_POST[\'apellido\'] </h3>';
echo '<h3>' . $_POST['nombre'] . ' ' . $_POST['apellido'] . '</h3>';
