<?php

use Medoo\Medoo;

require '../../../vendor/autoload.php';

// Configuración de la conexión con Medoo
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'bd_PWD-1',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);
