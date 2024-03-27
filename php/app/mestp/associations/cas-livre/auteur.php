<?php
class Auteur {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private ?DateTime $dateDeces;

    public function __construct(string $prenom, string $nom, string $dateNaissance, ?string $dateDeces) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->dateDeces = $dateDeces ? new DateTime($dateDeces) : null;

    }

    
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }
    public function getDateDeces(): void {
        $dateDecesObject = $this->dateDeces;
    
        if ($dateDecesObject !== null) {
            $dateDecesFormatted = $dateDecesObject->format('Y-m-d'); 
            echo "- Date de décès: " . $dateDecesFormatted . "\n";
        } else {
            echo "- Date de décès inconnue\n";
        }
    }
    
}

?>


