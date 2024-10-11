<?php 
use Laminas\Hydrator\ArraySerializableHydrator;
include_once '../../../configuracion.php';
include_once '../../../app/Model/Objeto.php';
require '../../../vendor/autoload.php';
$hidratacion = new ArraySerializableHydrator();

$objecto = $hidratacion->hydrate($_POST, new MiObjeto());

echo nl2br((string)$objecto);