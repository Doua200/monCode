<?php
class Chat extends Animal implements Predateur, Printable {
    public function chasser() {
        return "Le chat {$this->nom} chasse des souris.";
    }

    public function decrire() {
        return "Le chat {$this->nom} est un prédateur mammifère.";
    }
}
?>