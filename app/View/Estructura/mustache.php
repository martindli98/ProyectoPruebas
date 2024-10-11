<?php
require '../../vendor/autoload.php';

$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$rutaProyecto = "/Grupo17-TP123-PWD";
$baseURL = $protocolo . $host . $rutaProyecto;

$mustache = new Mustache_Engine;

// Data para pasarle al template
$data = [
    'title' => 'Trabajos Prácticos - Grupo 17',
    'baseURL' => $baseURL,
    'navLeft' => [
        ['link' => $baseURL . '/TP1', 'text' => 'TP 1'],
        ['link' => $baseURL . '/TP2', 'text' => 'TP 2'],
        ['link' => $baseURL . '/TP3', 'text' => 'TP 3'],
    ],
    'navRight' => [
        ['link' => $baseURL . '/TP4', 'text' => 'TP 4'],
        ['link' => $baseURL . '/TP5', 'text' => 'TP 5'],
        ['link' => $baseURL . '/TPFINAL', 'text' => 'FINAL'],
    ],
];

// Renderizar el template
$template = file_get_contents(__DIR__ . '/../Templates/header.mustache');
echo $mustache->render($template, $data); // Render the template with data
?>
