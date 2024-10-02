<?php

namespace App;

class Location
{
    private array $vehicules;
    private int $nbJours;

    /**
     * @param int $nbJours
     */
    public function __construct(int $nbJours)
    {
        $this->nbJours = $nbJours;
    }

    public function getNbJours(): int
    {
        return $this->nbJours;
    }

    public function setNbJours(int $nbJours): void
    {
        $this->nbJours = $nbJours;
    }

    public function louerVehicule(Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;
    }

    public function afficherDetailsLocation() : void
    {
        foreach ($this->vehicules as $vehicule) {
            echo $vehicule->afficherInfos();
        }
    }
}