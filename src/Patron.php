<?php

namespace App;
// La classe Paton hérite de la classe Employe
// Elle hérite de tous les attributs et méthodes de la classe Employe
// UN OBJET DE LA CLASSE PATRON EST EGALEMENT UN OBJET DE LA CLASSE EMPLOYE

class Patron extends Employe
{
    private string $voiture;

    public function __construct(string $prenom, string $nom, int $age, string $voiture)
    {
        // Appel au constructeur de la super-classe (classe Employe)
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function getVoiture(): string
    {
        return $this->voiture;
    }

    public function setVoiture(string $voiture): void
    {
        $this->voiture = $voiture;
    }

    // Méthodes spécifiques
    public function deplacer() : void
    {
        dump("Je me déplace en $this->voiture");
    }

    // Redéfinir la méthode presenter
    public function presenter() : void
    {
        // dump("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} ans et je suis le boss !");    // on fait ça lorsque que l'on n'a pas mis protected pour les attributs de la classe mère
        dump("Bonjour, je suis $this->prenom $this->nom, j'ai $this->age ans et je suis le boss !");
    }
}