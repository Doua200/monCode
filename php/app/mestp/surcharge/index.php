<?php
include_once 'functions.php';
include_once 'personne.php';
$prof = new Personne (prenom:"Thierry", nom:"BRU");
$prof->saluer("Bonjour");
foo($prof);
var_dump($prof);
?>