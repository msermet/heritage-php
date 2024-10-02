<?php

use App\Voiture;

require_once __DIR__.'/../vendor/autoload.php';

$voiture = new Voiture("Peugeot","206+",160,349.99,5,"électrique");
$voiture->afficherInfos();
$voiture->calculerCoutLocation(5);
