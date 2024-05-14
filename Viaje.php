<?php
/**
 * La clase Viaje debe hacer referencia al responsable 
 * de realizar el viaje.
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los 
 * atributos nombre, apellido, numero de documento y teléfono.
 */

 /**Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.
 */

 class Viaje {
    private $costoViaje;
    private $acumSumaCostos; // Total de los costos abonados por todos los pasajeros
    private $cantMaxPasajeros;
    private $colPasajeros; // Colección de objetos Pasajero

    public function __construct($costoViaje, $cantMaxPasajeros) {
        $this->costoViaje = $costoViaje;
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->colPasajeros = [];
        $this->acumSumaCostos = 0; // Inicializa la suma de costos abonados
    }

    public function getCantMaxPasajeros() {
        return $this->cantMaxPasajeros;
    }

    public function getCostoViaje() {
        return $this->costoViaje;
    }

    public function getAcumSumaCostos() {
        return $this->colSumaCostos;
    }

    public function getColPasajeros() {
        return $this->colPasajeros;
    }

    // Métodos para modificar atributos
    public function setCostoViaje($costoViaje) {
        $this->costoViaje = $costoViaje;
    }

    public function setCantMaxPasajeros($cantMaxPasajeros) {
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setAcumSumaCostos($cantMaxPasajeros) {
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setColPasajeros($colPasajeros) {
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }

    


    public function __toString() {
        $respuesta = "Costo del viaje: $this->costoViaje\n";
        $respuesta .= "Cantidad máxima de pasajeros: $this->cantMaxPasajeros\n";
        $respuesta .= "Total recaudado: $this->colSumaCostos\n";
        $respuesta .= "Pasajeros:\n";
        foreach ($this->getColPasajeros as $pasajero) {
            $respuesta .= $pasajero->__toString() . "\n";
        }
        return $respuesta;
    }

    /*Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.
**/

    public function venderPasaje($objPasajero){
        $colPasajeros = $this->getColPasajeros();
        $costo = $this->getCostoViaje();
        $costoFinal = 0;
        $hayLugar = $this->hayPasajesDisponible();
        $acumSumaCostos = $this->getAcumSumaCostos();

        if ($hayLugar) {
            // Agregar el pasajero a la colección
            array_push($colPasajeros, $objPasajero);
            $this->setColPasajeros($colPasajeros);

            // Verificar el tipo de pasajero y establecer el costo final
            if ($objPasajero instanceof PasajeroVIP) {
                // se estableces el precio para un pasajero VIP
                $costoFinal =$objPasajero->darPorcentajeIncremento();  
            } elseif ($objPasajero instanceof PasajeroEspecial) {
                // Aquí estableces el precio para un pasajero especial
                $costoFinal = $objPasajero->incrementoPrecio(); // descuento que se encuentra en su propia funcion 
            } else {
                
                $costoFinal = $objPasajero->incrementoPrecioPasajero(); // incremento un 10% para pasajeros normales
            }
        }

        return $costoFinal;
    }



        //Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario

        public function hayPasajesDisponible(){
            $colPasajeros=$this->getColPasajeros();
            $cantMaxPasajeros=$this->cantMaxPasajeros();
            $disponible=false;
            if ($cantMaxPasajeros>$colPasajeros) {
                $disponible=true;
            }
            return $disponible;

        }


    }




