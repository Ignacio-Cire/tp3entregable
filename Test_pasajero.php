<?php

// Incluir las clases
include_once 'Viaje.php';
include_once 'Pasajero.php';
include_once 'PasajeroVip.php';
include_once 'PasajeroEspecial.php';

// Crear instancias de pasajeros
$objPasajeroNormal = new Pasajero("Juan", "A1", "T123");
$objPasajeroVip = new PasajeroVip("María", "B2", "T456", "VF789", 400);
$objPasajeroEspecial = new PasajeroEspecial("Carlos", "C3", "T789");

// Crear instancia de Viaje
$viaje = new Viaje(100, 50); // Costo del viaje: 100, Máximo de pasajeros: 50

// Vender pasajes
$costoPasajeroNormal = $viaje->venderPasaje($objPasajeroNormal);
$costoPasajeroVip = $viaje->venderPasaje($objPasajeroVip);
$costoPasajeroEspecial = $viaje->venderPasaje($objPasajeroEspecial);

// Mostrar resultados
echo "Costo para pasajero normal: $costoPasajeroNormal\n";
echo "Costo para pasajero VIP: $costoPasajeroVip\n";
echo "Costo para pasajero especial: $costoPasajeroEspecial\n";

// Mostrar detalles del viaje
echo $viaje;


