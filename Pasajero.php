<?php
class Pasajero {
    private $nombre;
    private $nroAsiento;
    private $nroTiket;

    public function __construct($nombre, $nroAsiento,$nroTiket){
        $this->nombre=$nombre;
        $this->nroAsiento=$nroAsiento;
        $this->nroTiket=$nroTiket;
    }

    // metoodos get
    public function getNombre(){
        return $this->getNombre;
    }
    public function getNroAsiento(){
        return $this->nroAsiento;
    }
    public function getNroTiket(){
        return $this->nroTiket;
    }

    // metodos set
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setNroAsieto($nroAsiento){
        $this->nroAsiento=$nroAsiento;
    }
    public function setNroTiket($nroTiket){
        $this->nroTiket=$nroTiket;
    }

    public function __toString(){
        $rta= "Nombre: " . $this->getNombre() . "\n";
        $rta.= "Numero de asiento: " . $this->getNroAsiento();
        $rta.="numero de tiket: " . $this->getNroTiket();

        return $rta;

    }

    //Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.

    public function incrementoPrecioPasajero(){
        $importeFinal=0.10;
       
        
        return $importeFinal;
    }
    }




