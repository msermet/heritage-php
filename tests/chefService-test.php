<?php

use App\ChefService;

require_once __DIR__.'/../vendor/autoload.php';

$chefService = new ChefService("Hugo", "Talbot", 35,"informatique");
$chefService->presenter();
