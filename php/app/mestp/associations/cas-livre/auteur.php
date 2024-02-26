<?php
class Livre 
{
    private string $_nom;
    private string $_prenom;
    private Date $_dateNaissance;
    private Date $_dateDeces;
    
   
    public function __construct(string $_prenom, string $_nom, Date $_dateNaissance, Date $_dateDeces)
    {
        $this->_prenom=$prenom;
        $this->_nom=$nom;
        $this->_dateNaissance=$_dateNaissance;
        $this->_dateDeces=$_dateDeces;
        
    } 
    public function getPrenom():string {
        return this->_prenom;
    }
   
    public function getNom():string {
        return this->_nom;
    }
    
    public function getDateNaissance():Date {
        return this->_dateNaissance;
    }
    public function getDateDeces():Date {
        return this->_dateDeces;
    }
    public function getEstDecede(int $anneeDeces):Date {
        $anneeActuelle = date("Y");
        return $anneeActuelle > $anneeDeces;
    }
   
   
}
?>