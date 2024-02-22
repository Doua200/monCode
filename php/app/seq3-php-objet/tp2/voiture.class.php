<?php
declare(strict_types=1);

class Voiture {
    public $marque;
    public $modele;
    public $annee;

    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function afficherDetails() {
        return "Marque : $this->marque Modèle : $this->modele Année : " . $this->annee;
    }
}






?>