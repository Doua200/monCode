<?php
class Auteur
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private DateTime $_dateDeces;
    
   
    public function __construct(string $_prenom, string $_nom, string $_dateNaissance, string $_dateDeces)
    {
        $this->_prenom = $_prenom;
        $this->_nom = $_nom; 
        $this->_dateNaissance = new DateTime(strtotime($_dateNaissance));
        $this->_dateDeces = new DateTime(strtotime($_dateDeces));
        
    } 
    public function getPrenom(): string { 
        return $this->_prenom;
    }
   
    public function getNom(): string {
        return $this->_nom;
    }
    
    public function getDateNaissance(): Date {
        return $this->_dateNaissance; 
    }
    public function getDateDeces(): Date {
        return $this->_dateDeces; 
    }
    public function getEstDecede(int $anneeDeces): bool {
        $anneeActuelle = date("Y");
        return $anneeActuelle > $anneeDeces;
    }
   
   
}
?>
