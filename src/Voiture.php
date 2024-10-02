<?php

namespace App;

class Voiture extends Vehicule
{
    private int $nombrePortes;
    private string $typeCarburant;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier,int $nombrePortes, string $typeCarburant)
    {
        parent::__construct($marque,$modele,$vitesseMax,$prixJournalier);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function getNombrePortes(): int
    {
        return $this->nombrePortes;
    }

    public function setNombrePortes(int $nombrePortes): void
    {
        $this->nombrePortes = $nombrePortes;
    }

    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }

    public function afficherInfos() : void
    {
        echo "Nombre de portes : $this->nombrePortes \nType de carburant : $this->typeCarburant";
    }

    public function calculerCoutLocation(int $nbJours) : void
    {
        $cout = $this->prixJournalier*$nbJours;
        if ($this->typeCarburant=="électrique") {
            $cout=$cout*1.1;
        }
        echo "Coût pour $nbJours jours : $cout €";
    }
}