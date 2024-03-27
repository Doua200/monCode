<?php
class Vache extends Animal implements Herbivore, Mammifere {
    public function brouter() {
        return "La vache {$this->nom} broute de l'herbe.";
    }

    public function mettre_bas() {
        return "La vache {$this->nom} met bas des veaux.";
    }

    public function decrire() {
        return "La vache {$this->nom} est un mammifère herbivore.";
    }
}
?>