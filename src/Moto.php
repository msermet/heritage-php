<?php

namespace App;

class Moto extends Vehicule
{
    private string $typeGuidon;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier, string $typeGuidon)
    {
        parent::__construct($marque,$modele,$vitesseMax,$prixJournalier);
        $this->typeGuidon=$typeGuidon;
    }

    public function getTypeGuidon(): string
    {
        return $this->typeGuidon;
    }

    public function setTypeGuidon(string $typeGuidon): void
    {
        $this->typeGuidon = $typeGuidon;
    }

    public function afficherInfos() : void
    {
        echo "Type de guidon : $this->typeGuidon";
    }

    public function calculerCoutLocation(int $nbJours) : void
    {
        $cout = $this->prixJournalier*$nbJours;
        if ($nbJours>7) {
            $cout=$cout*0.95;
        }
        echo "Coût pour $nbJours jours : $cout €";
    }
}