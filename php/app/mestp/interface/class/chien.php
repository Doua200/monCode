<?php
class Chien extends Animal implements Mammifere {
    public function mettre_bas() {
        return "Le chien {$this->nom} met bas des chiots.";
    }

    public function decrire() {
        return "Le chien {$this->nom} est un mammifère.";
    }
}
?>