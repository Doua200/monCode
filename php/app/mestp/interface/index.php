<?php
include_once 'interfaces/iherbivoreable.php';
include_once 'interfaces/iovipareable.php';
include_once 'interfaces/imammifereable.php';
include_once 'interfaces/ipredateurable.php';
require_once 'class/animal.php';
require_once 'class/poulet.php';
require_once 'class/chat.php';
require_once 'class/chien.php';
require_once 'class/vache.php';

$vache= new Vache("Rousstte");
$chien = new Chien ("Bixt");
$poulet = new Poulet("Coqboss");
$chat= new Chat("Gertrude");



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

?>