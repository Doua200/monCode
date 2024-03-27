<?php
class Poulet extends Animal implements Ovipare {
    public function pondre() {
        return "La poule {$this->nom} pond des œufs.";
    }

    public function decrire() {
        return "La poule {$this->nom} est un oiseau ovipare.";
    }
}
?>