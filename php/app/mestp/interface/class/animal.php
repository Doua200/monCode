<?php
 abstract class Animal {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    abstract public function decrire();
}


?>