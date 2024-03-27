<?php
require_once "genre.php";

class Livre {
    private string $titre;
    private int $annee;
    private string $isbn;
    private string $resume;
    private array $auteurs;
    private string $genre;

    public function __construct(string $titre, int $annee, string $isbn, string $resume, Auteur $auteurs, string $genre) {
        $this->titre = $titre;
        $this->annee = $annee;
        $this->isbn = $isbn;
        $this->resume = $resume;
        $this->auteurs =[];
        $this->genre = $genre;
    }

    public function getTitre(): string {
        return $this->titre;
    }
    public function getAnnee(): int {
        return $this->annee;
    }
    public function getISBN(): string {
        return $this->isbn;
    }
    public function getResume(): string {
        return $this->resume;
    }
    public function ajouterAuteur(Auteur $auteur) {
        $this->auteurs[] = $auteur;
    }

    public function getAuteurs(): array {
        return $this->auteurs;
    }
    public function getGenre(): string {
        return $this->intitule;
    }
}

?>