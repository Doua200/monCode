<?php
declare(strict_types=1);
class Stagiaire {
    public string $nom;
    public string $prenom;
   
    // Constructeur
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    
    // Méthode pour obtenir le nom complet du stagiaire
    public function getPresentation(): string {
        return "je m\'appelle $this->prenom . ' ' . $this->nom";
    }
}






?>