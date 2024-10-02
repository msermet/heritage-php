<?php

use App\Vehicule;

require_once __DIR__.'/../vendor/autoload.php';

$vehicule = new Vehicule("Peugeot","206+",160,349.99);
$vehicule->afficherInfos();
$vehicule->calculerCoutLocation(5);
