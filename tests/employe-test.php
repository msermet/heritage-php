<?php

use App\Employe;

require_once __DIR__.'/../vendor/autoload.php';

$employe = new Employe("Maxime","Sermet",19);
$employe->presenter();