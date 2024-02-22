<?php
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
class Personne
{
   public string $prenom;
   public string $nom;
   public string $particularite;
   public DateTime $dateDeNaissance;

    public function __construct($nom, $prenom,$particularite,$dateDeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->particularite = $particularite;
        $this->date = $dateDeNaissance;
    }
    
       public function getPresentation(): string {
        return "je m\'appelle $this->prenom . $this->nom  .$this->particularite .$this->date";
    }
}
 

