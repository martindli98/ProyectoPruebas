<?php 
// header('Content-Type: text/html; charset=utf-8');
// header("Cache-Control: no-cache, must-revalidate ");

// /////////////////////////////
// // CONFIGURACION APP//
// /////////////////////////////

// $PROYECTO = 'ProyectoPruebas';

// //variable que almacena el directorio del proyecto
// $ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

// include_once($ROOT . './app/Utils/funcs.php');

// // Variable que define la pagina de autenticacion del proyecto
// $INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/vista/login/login.php";

// // variable que define la pagina principal del proyecto (menu principal)
// $PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/principal.php";


// $_SESSION['ROOT'] = $ROOT;

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");

// CONFIGURACION APP

$PROYECTO = 'ProyectoPruebas';

// Variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

// Incluir funciones de utilidad
include_once($ROOT . 'app/Utils/funcs.php');

// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/vista/login/login.php";

// Variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/principal.php";

// Iniciar la sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['ROOT'] = $ROOT;

// Incluir autoload de Composer para Medoo
require $ROOT . 'vendor/autoload.php';

// Configuración de la conexión con Medoo
use Medoo\Medoo;

$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'prueba',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

