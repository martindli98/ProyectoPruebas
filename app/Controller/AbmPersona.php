<?php
use Laminas\Hydrator\ArraySerializableHydrator;
include_once '../Model/Persona.php';
include_once '../../configuracion.php';
require '../../vendor/autoload.php';
class AbmPersona
{
    private $msjError;

    public function __construct() {}

    public function getMsjError()
    {
        return $this->msjError;
    }

    public function setMsjError($msjError)
    {
        $this->msjError = $msjError;
    }

    

    // obbtener persona por dni
    private function obtenerDatosObjPersona()
    {
        $arrayDatos = darDatosSubmitted1();
        
        return $arrayDatos;
    }

    public function hidratacion(){
    $array = $this->obtenerDatosObjPersona();
    $hidratacion = new ArraySerializableHydrator();
    $objeto = $hidratacion->hydrate($array, new MiPersona());
    }
    public function agregarObjPersona()
    {
        $objetoPersona = new MiPersona();

        $person = $objetoPersona->getArrayCopy();
        $dni = $person['NroDni'];

        $data = $database->select('NroDni', '*');
        
        // // Mostrar los resultados
        // print_r($data);
        
        // if ($this->obtenerDatosObjPersona($nroDni) !== null) {
        //     $msj = 'PERSONA AGREGADA CORRECTAMENTE';
        // } else {
            
        // }

        return $msj;
    }

    public function modificarDatosPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $msj = '';

        $abmObjPersona = new AbmPersona();
        $objPersona = new Persona();
        $objPersona->cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);

        if (!($abmObjPersona->obtenerDatosObjPersona($nroDni) === null)) {
            try {
                $objPersona->modificar();
                $msj = "exito";
            } catch (PDOException $e) {
                $msj = "Error: " . $e->getMessage();
            }
        } else {
            $msj = "no persona en bdd";
        }
        return $msj;
    }
}
