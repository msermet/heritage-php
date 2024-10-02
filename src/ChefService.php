<?php

namespace App;

class ChefService extends Employe
{
    private string $service;

    public function __construct(string $prenom, string $nom, int $age, string $service)
    {
        // Appel au constructeur de la super-classe (classe Employe)
        parent::__construct($prenom, $nom, $age);
        $this->service = $service;
    }

    public function getService(): string
    {
        return $this->service;
    }

    public function setService(string $service): void
    {
        $this->service = $service;
    }

    // Redéfinir la méthode presenter
    public function presenter() : void
    {
        dump("Bonjour, je suis $this->prenom $this->nom, j'ai $this->age ans et je suis le chef du service $this->service");
    }
}