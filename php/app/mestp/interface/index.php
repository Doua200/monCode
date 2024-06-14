<?php
include_once 'interfaces/iherbivoreable.php';
include_once 'interfaces/iovipareable.php';
include_once 'interfaces/imammifereable.php';
include_once 'interfaces/ipredateurable.php';
include_once 'interfaces/iprintable.php';
require_once 'class/animal.php';
require_once 'class/poulet.php';
require_once 'class/chat.php';
require_once 'class/chien.php';
require_once 'class/vache.php';
require_once 'class/livre.class.php';

$vache= new Vache("Rousstte");
$chien = new Chien ("Bixt");
$poulet = new Poulet("Coqboss");
$chat= new Chat("Gertrude");
$livre = new Livre("l'Oeuvre imparfait", 2022, "1234567890", 
"Les hommes sont toujours à la recherche de nouvelles connaissances");


$herbivores = [$chien, $poulet, $vache];
$carnivores = [$poulet, $chien, $chat];

echo "Herbivores";
foreach ($herbivores as $animal) {
    if (method_exists($animal, 'brouter')) {
        echo $animal->brouter();
    }
}

echo "Carnivores";
foreach ($carnivores as $animal) {
    if ($animal instanceof Predateur && method_exists($animal, 'chasser')) {
        echo $animal->chasser();
    }
}


echo $livre->getTitre() . "<br>";
echo $livre->getDateSortie() . "<br>";
echo $livre->getISBN() . "<br>";
echo $livre->getResume() . "<br>";
?>