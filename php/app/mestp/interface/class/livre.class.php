<?php

class Livre
{
   private string $_titre;
   private int $_dateSortie;
   private string $_isbn;
   private string $_resume;

    public function __construct(string $titre, int $dateSortie, string $isbn, string $resume)
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_isbn = $isbn;
        $this->_resume = $resume;
    }

    public function getTitre(): string
    {
        return 'Titre : ' . $this->_titre;
    }

    public function getDateSortie(): int
    {
        return 'Date de Sortie : ' . $this->_dateSortie;
    }

    public function getISBN(): string
    {
        return 'ISBN : ' . $this->_isbn;
    }

    public function getResume(): string
    {
        return 'Resume : ' . $this->_resume;
    }
}




?>
