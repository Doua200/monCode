<?php
class Livre {
    private $_titre;
    private $_annee;
    private $_date;
    private $_isbn;
    private $_resume;

    public function __construct($titre, $annee, $date, $isbn, $resume) {
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_date = $date;
        $this->_isbn = $isbn;
        $this->_resume = $resume;
    }

    
    public function getTitre():string {
          return $this->_titre;
    }

    public function getDateSortie():int {
        return $this->_date;
    }

    public function getISBN():string {
        return $this->_isbn;
    }

    public function getResume():string {
        return $this->_resume;
    }
}
?>