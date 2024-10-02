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
        echo "Moto :\nMarque : $this->marque \nModèle : $this->modele \nVitesse max : $this->vitesseMax \nPrix journalier : $this->prixJournalier \nType de guidon : $this->typeGuidon";
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        $cout = $this->prixJournalier * $nbJours;
        if ($nbJours > 7) {
            $cout *= 0.95;
        }
        return $cout;
    }
}