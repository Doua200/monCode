<?php
class Personne {
    private string $_nom;
    private string $_prenom;

    public function __construct(string $prenom, string $nom) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
    }

    public function __destruct() {
        echo "l'instance vient d'être détruite.";
    }

    public function __debugInfo() {
        return ['name' => $this->_nom, 'first_name' => $this->_prenom];
    }

    public function saluer(string $mot) {
        echo "$mot $this->_prenom\n";
    }

    public function __call($name, $arguments) {
        echo "la methode " . $name . " a été appelée avec les paramètres suivants:\n";
        var_dump($arguments);
    }
}
?>
