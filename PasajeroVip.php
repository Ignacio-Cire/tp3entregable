<?php
include_once 'Pasajero.php';

class PasajeroVIP extends Pasajero {
    private $nroViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombre, $nroAsiento, $nroTiket, $nroViajeroFrecuente, $cantMillas) {
        parent::__construct($nombre, $nroAsiento, $nroTiket);
        $this->nroViajeroFrecuente = $nroViajeroFrecuente;
        $this->cantMillas = $cantMillas;
    }

    // Métodos getters
    public function getNroViajeroFrecuente() {
        return $this->nroViajeroFrecuente;
    }

    public function getCantMillas() {
        return $this->cantMillas;
    }

    // Métodos setters
    public function setNroViajeroFrecuente($nroViajeroFrecuente) {
        $this->nroViajeroFrecuente = $nroViajeroFrecuente;
    }

    public function setCantMillas($cantMillas) {
        $this->cantMillas = $cantMillas;
    }

    public function __toString() {
        $rta = parent::__toString();
        $rta .= "Número de Viajero Frecuente: " . $this->getNroViajeroFrecuente() . "\n";
        $rta .= "Cantidad de Millas: " . $this->getCantMillas() . "\n";
        return $rta;
    }

    /** Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas supera a las 300 millas se realiza un incremento del 30% */

    public function darPorcentajeIncremento(){
        $porcentajeIncremento= 0.35;
        $cantMillas= $this->getCantMillas();
        if ($cantMillas > 300) {
            $porcentajeIncremento=0.30;

        }
        return $porcentajeIncremento;
    }

    


}
