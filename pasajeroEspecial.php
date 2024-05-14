<?php
include_once 'Pasajero.php';

class PasajeroEspecial extends Pasajero {
    private $ColServiciosEspeciales;

    public function __construct($nombre, $nroAsiento, $nroTiket) {
        parent::__construct($nombre, $nroAsiento, $nroTiket);
        $this->serviciosEspeciales = [];
    }

    // Método getter para los servicios especiales
    public function getServiciosEspeciales() {
        return $this->serviciosEspeciales;
    }

    // Método setter para los servicios especiales
    public function setColServiciosEspeciales($serviciosEspeciales) {
        $this->serviciosEspeciales = $serviciosEspeciales;
    }

    public function __toString() {
        $rta = parent::__toString();
        $coleccion = $this->getColServiciosEspeciales();
        $rta .= "Servicios Especiales: " . mostrarColeccion($coleccion) . "\n";
        return $rta;
    }

    public function mostrarColeccion($coleccion){
        $rta= "\n";
        foreach ($coleccion as $servicios) {
            $rta.= $servicios . "\n";
        }
        return $rta;

    }

    /**Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15%. 
 */

    public function incrementoPrecio (){
        $importeFinal=0;
        $coleccion= $this->getServiciosEspeciales();
        $n=count ($coleccion);
        if ($coleccion==3) {
            $importeFinal+=0.30;
        } 
        if ($coleccion==1) {
            $importeFinal+=0.15;
        }
        return $importeFinal;



    }


}
