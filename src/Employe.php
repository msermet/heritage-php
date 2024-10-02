<?php

namespace App;

class Employe
{
    protected string $prenom;
    protected string $nom;
    protected int $age;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function presenter() : void
    {
        // var_dump sur packagist pour utiliser dump -> style
        dump("Bonjour je m'appelle $this->prenom $this->nom et j'ai $this->age ans");
    }
}