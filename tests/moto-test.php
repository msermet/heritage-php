<?php

use App\Moto;

require_once __DIR__.'/../vendor/autoload.php';

$moto = new Moto("Yamaha","R1",300,239.99,"Acier");
$moto->afficherInfos();
echo PHP_EOL;
$moto->calculerCoutLocation(7);
