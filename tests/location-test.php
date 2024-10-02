<?php

use App\Location;
use App\Voiture;
use App\Moto;

require_once __DIR__.'/../vendor/autoload.php';

$voiture = new Voiture("Peugeot","206+",160,349.99,5,"électrique");
$moto = new Moto("Yamaha","R1",300,239.99,"Acier");

$location = new Location(5);
$location->louerVehicule($voiture);
$location->louerVehicule($moto);
$location->afficherDetailsLocation();