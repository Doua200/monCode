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


    public function __construct(string $prenom,string $nom,DateTime $date ,string $resume) {
        $this->nom = strtoupper($nom);
        $this->prenom = ucfirst($prenom);
        $this->resume = $resume;
        $this->date = $date;
    }
    
       public function getPresentation(): string {
        return "je m\'appelle $this->prenom . $this->nom  .$this->resume .$this->date";
    }

    public static function create(string $pJson):Personne
    {
        $objet = json_decode($pJson);
        $date = new DateTime($objet->date);
       
        return new Personne($objet->prenom,$objet->nom,$date ,$objet->resume );
    }
}
