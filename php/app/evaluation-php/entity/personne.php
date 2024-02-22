<?php
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
class Personne
{
   public string $prenom;
   public string $nom;
   public string $resume;
   public DateTime $date;

    public function __construct($prenom,$nom,$date ,$resume) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->resume = $resume;
        $this->date = $date;
    }
    
       public function getPresentation(): string {
        return "je m\'appelle $this->prenom . $this->nom  .$this->resume .$this->date";
    }
}
 

