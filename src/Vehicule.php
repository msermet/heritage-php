<?php

namespace App;

class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $vitesseMax;
    protected float $prixJournalier;

    /**
     * @param string $marque
     * @param string $modele
     * @param int $vitesseMax
     * @param float $prixJournalier
     */
    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
        $this->prixJournalier = $prixJournalier;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    public function setVitesseMax(int $vitesseMax): void
    {
        $this->vitesseMax = $vitesseMax;
    }

    public function getPrixJournalier(): float
    {
        return $this->prixJournalier;
    }

    public function setPrixJournalier(float $prixJournalier): void
    {
        $this->prixJournalier = $prixJournalier;
    }

    public function afficherInfos() : void
    {
        echo "Marque : $this->marque \nModèle : $this->modele \nVitesse max : $this->vitesseMax \nPrix journalier : $this->prixJournalier";
    }

    public function calculerCoutLocation(int $nbJours)
    {
        $cout = $this->prixJournalier*$nbJours;
        echo "Coût pour $nbJours jours : $cout €";
    }
}