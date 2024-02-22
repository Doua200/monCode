<?php
declare(strict_types=1);
class Rectangle {
    private float $largeur;
    private float $longueur;
   
    // Constructeur
    public function __construct($largeur, $longueur) {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }
    
    // Méthode pour obtenir le perimetre
    public function calculerPerimetre(): float {
        return (2*($this->largeur+$this->longueur));
    }

    // Méthode pour obtenir la surface
    public function calculerSurface(): float {
        return ($this->largeur*$this->longueur);
    }

     // Méthode pour obtenir la surface
     public function estUnLosange(): bool {
          if ($this->longueur == $this->largeur) {
            // Calculer la longueur de la première diagonale
            $diagonale1 = sqrt(($this->longueur ** 2) + ($this->largeur ** 2));

            // Calculer la longueur de la deuxième diagonale
            $diagonale2 = sqrt(($this->longueur ** 2) + ($this->largeur ** 2));

            // Vérifier si les diagonales sont égales
            if ($diagonale1 == $diagonale2) {
                return true; // Le rectangle est un losange
            }
        }

        return false; // Le rectangle n'est pas un losange
    }
}

?>