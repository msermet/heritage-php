<?php

namespace App;

class Location
{
    private array $vehicules = [];
    private int $nbJours;

    public function __construct(int $nbJours)
    {
        $this->nbJours = $nbJours;
    }

    public function louerVehicule(Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;
    }

    public function afficherDetailsLocation() : void
    {
        $totalGlobal = 0;
        foreach ($this->vehicules as $vehicule) {
            $vehicule->afficherInfos();
            echo PHP_EOL;
            $cout = $vehicule->calculerCoutLocation($this->nbJours);
            echo "Coût pour " . $this->nbJours . " jours : " . $cout . " €";
            echo PHP_EOL;
            $totalGlobal += $cout;
        }
        echo PHP_EOL . "Coût total de la location : " . $totalGlobal . " €";
    }
}
