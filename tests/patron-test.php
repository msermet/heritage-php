<?php

use App\Patron;

require_once __DIR__.'/../vendor/autoload.php';

$patron = new Patron("Phong", "Nguyen", 56,"BMW M5 V10");
$patron->presenter();
$patron->deplacer();
