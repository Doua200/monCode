<?php
require_once 'livre.php';
require_once 'auteur.php';
require_once 'genre.php';
require_once 'pays.php';



class Bibliotheque
{
    private array $livres;
    private array $auteurs;
    private array $genres;
    private array $pays;

    public function __construct()
    {
        $this->livres = [];
        $this->auteurs = [];
        $this->genres = [];
        $this->pays = [];
    }

    public function ajouterLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    public function ajouterAuteur(Auteur $auteur)
    {
        $this->auteurs[] = $auteur;
    }

    public function ajouterGenre(Genre $genre)
    {
        $this->genres[] = $genre;
    }

    public function ajouterPays(Pays $pays)
    {
        $this->pays[] = $pays;
    }

public function afficher()
{
    $result = "Bibliothèque :\n";
    foreach ($this->livres as $livre) {
        $result .= "- Titre: " . $livre->getTitre() . "\n";
        $result .= "  Année: " . $livre->getAnnee() . "\n";
        $result .= "  ISBN: " . $livre->getISBN() . "\n";
        $result .= "  Résumé: " . $livre->getResume() . "\n";

        // Traiter les auteurs pour ce livre
        foreach ($livre->getAuteurs() as $auteur) {
            if ($auteur instanceof Auteur) {
                $result .= "- Auteur: " . $auteur->getNom() . "\n";
                $auteur->getDateDeces(); 
            }
        }
        
        // Traiter les genres pour ce livre
        foreach ($livre->getGenres() as $genre) {
            $result .= "- Genre: " . $genre->getGenre() . "\n";
        }
        
        // Traiter les pays pour ce livre
        foreach ($livre->getPays() as $pays) {
            $result .= "- Pays: " . $pays->getNomPays() . "\n";
        }
        
        $result .= "\n"; // Ajouter une ligne vide entre chaque livre
    }
    return $result;
}
}
?>