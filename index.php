<?php
include_once 'configuracion.php';
include_once './Vista/Estructura/header.php';
?>
<div class="main-container w-100 p-2 d-flex justify-content-center">
<div class="ms-3 me-3 border border-2 rounded p-4 pt-3 d-flex flex-column align-items-center w-100">
    
    <!-- Encabezado de Presentación -->
    <div class="w-100 p-2 pb-0 text-center">
        <h5>INVESTIGACI&Oacute;N DE LIBRER&Iacute;AS</h5>
        <h6 class="text-success">MeDoo - Laminas/Hydrator</h6>
        <hr class="border-success" style="width: auto; border: 1px dotted black;">
    </div>

    <!-- Sección de Tarjetas de Librerías -->
    <div class="d-flex w-100 justify-content-around">
        <div class="w-50 m-3">
            <div class="card d-flex flex-column align-items-center p-3" style="height: 28em;">
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <img src="Vista/assets/img/medoo-logo.png" class="card-img-top" alt="Medoo Logo" style="width: 80px; height: 80px;">
                        <h5 class="card-title ps-2 pt-3">medoo/medoo</h5>
                    </div>
                    <p class="card-text mb-3 p-0 fs-6">
                        Medoo es una micro-ORM (Object Relational Mapper) para PHP que simplifica las interacciones con bases de datos 
                        mediante una capa de abstracción, permitiendo realizar consultas de manera más eficiente y reduciendo la complejidad 
                        de trabajar directamente con SQL
                    </p>
                    <ul class="fs-6 text-start">
                        <li>Facilita el manejo de datos con SQL simple</li>
                        <li>Compatible con múltiples bases de datos</li>
                        <li>Ideal para proyectos pequeños y medianos</li>
                    </ul>
                </div>
                <a href="#seccionMedoo" class="btn btn-success fs-6 mb-3 w-50">Ver Documentaci&oacute;n</a>
            </div>
        </div>

        <div class="w-50 m-3">
            <div class="card d-flex flex-column align-items-center p-3" style="height: 28em;">
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <img src="Vista/assets/img/hydrator-logo.png" class="card-img-top" alt="Hydrator Logo" style="width: 60px; height: 80px;">
                        <h5 class="card-title ps-2 pt-3">Laminas/Hydrator</h5>
                    </div>
                    <p class="card-text mb-3 p-0 fs-6">
                        Laminas/Hydrator es parte del ecosistema Laminas, un framework para aplicaciones web en PHP. Hydrator se enfoca en transformar 
                        (hidratar) datos entre distintos tipos de estructuras, principalmente entre objetos y arrays o bases de datos.
                    </p>
                    <ul class="fs-6 text-start">
                        <li>Facilita el intercambio de datos entre diferentes formatos</li>
                        <li>Es extensible y modular</li>
                        <li>Ideal para sistemas grandes y complejos</li>
                    </ul>
                </div>
                <a href="#seccionHydrator" class="btn btn-success fs-6 mb-3 w-50">Ver Documentaci&oacute;n</a>
            </div>
        </div>
    </div>

    <!-- Sección Extensiva de Detalles -->
    <div id="seccionMedoo" class="w-100 mt-5">
        <h5 class="text-center">Detalles de Medoo</h5>
        <p class="fs-6">
            Medoo es una de las micro-ORM más ligeras que existen para PHP. Su objetivo principal es simplificar las interacciones con bases de datos,
            especialmente para desarrolladores que no necesitan la sobrecarga que puede traer un ORM completo.
        </p>
        <h6>Características principales:</h6>
        <ul class="fs-6">
            <li>Soporte para múltiples bases de datos: MySQL, MariaDB, PostgreSQL, SQLite, y más</li>
            <li>Consultas SQL simplificadas con arrays asociativos</li>
            <li>Transacciones automáticas y control de errores</li>
            <li>Compatibilidad con JSON y otros formatos de datos</li>
        </ul>
    </div>

    <div id="seccionHydrator" class="w-100 mt-5">
        <h5 class="text-center">Detalles de Laminas/Hydrator</h5>
        <p class="fs-6">
            Laminas/Hydrator es un componente esencial dentro del ecosistema Laminas, diseñado para manejar la transformación de datos entre objetos y 
            formatos planos como arrays o bases de datos. Esta herramienta es clave cuando trabajas con aplicaciones empresariales que requieren una gestión
            compleja de datos.
        </p>
        <h6>Características principales:</h6>
        <ul class="fs-6">
            <li>Transforma datos entre estructuras heterogéneas de manera automática</li>
            <li>Es completamente extensible mediante custom strategies</li>
            <li>Permite deshidratar (convertir objetos en arrays) y viceversa</li>
        </ul>
    </div>

</div>

<?php
