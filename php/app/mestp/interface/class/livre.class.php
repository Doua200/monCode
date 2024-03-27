<?php
class Livre
{
   private string $_titre;
   private int $_dateSortie;
   private string $_isbn;
   private string $_resume;

public function __construct(string $titre,int $dateSortie,string $isbn,string $resume){
    $this->_titre= $titre;
    $this->_dateSortie= $dateSortie;
    $this->_isbn= $isbn;
    $this->_resume= $resume;
}

}