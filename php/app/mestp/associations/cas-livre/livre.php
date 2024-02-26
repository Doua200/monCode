<?php
class Livre 
{
    private string $_titre;
    private int $_dateSortie;
    private string $_isbn;
    private string $_resume;
   
    public function __construct(string $titre,int $dateSortie, string $_isbn,string $_resume)
    {
        $this->_titre=$titre;
        $this->_date=$dateSortie;
        $this->_isbn=$isbn;
        $this->_resume=$resume;
    } 
    public function getTitre():string {
        return this->_titre;
    }

    public function getDateSortie():int {
        return this->_date;
    }

    public function getISBN():string {
        return this->_isbn;
    }

    public function getResume():string {
        return this->_resume;
    }
}
?>