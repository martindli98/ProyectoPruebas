<?php

include_once './Estructura/mustache.php';
include_once('../../configuracion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
        <form action="./Action/formAction.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido">
            <br>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad">
            <br>
            <label for="NroDni">DNI:</label>
            <input type="text" name="NroDni" id="NroDni">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>