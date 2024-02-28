<?php
require_once 'livre.php';
require_once 'auteur.php';
require_once 'genre.php';
require_once 'pays.php';

class Bibliotheque
{
    public array $livre;
    public array $auteur;
    public string $pays;
    public string $genre;

    public function __construct(array $livre,array $auteur, Pays $pays, Genre $genre)
    {
        $this->livre = $livre;
        $this->unAutreLivre = $livre;
        $this->encoreUnAutreLivre = $livre;
        $this->auteur = $auteur;
        $this->unAutreAuteur = $auteur;
        $this->encoreUnAutreAuteur = $auteur;
        $this->pays = $pays;
        $this->genre = $genre;
    }

    public function getLivre(): Livre
    {
        return $this->livre;
    }

}

?>
