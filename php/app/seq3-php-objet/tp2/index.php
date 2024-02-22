<?php
declare(strict_types=1);
require_once 'stagiaire.class.php';
require_once 'rectangle.class.php';
require_once 'voiture.class.php';
// ETAPE 1
$stagiaire1 = array(
    "nom" => "HENRY",
    "prenom" => "Lulu");

$stagiaire2 = array(
        "nom" => "QUENTIN",
        "prenom" => "Albert");
$stagiaires= [$stagiaire1, $stagiaire2];
// END 1

// ETAPE 2 inclus la class Stagiaire
$stagiaire1 = new Stagiaire("HENRY", "Lulu");
$stagiaire2 = new Stagiaire("QUENTIN", "Albert");
$stagiaires= [$stagiaire1, $stagiaire2];
// END 2 
?>
<?php
// ETAPE 3 inclus les methods de la class Stagiaire ?>
<?php
foreach ($stagiaires as $key => $stagiaire) {?>

    <?=$stagiaire->getPresentation()?>


    <?php
}?>
<?php 
// ETAPE 5 inclus les methods de la class stagiaire
$voiture = new Voiture("Toyota", "Corolla", 2022)
?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
<? var_dump($stagiaires) ?>
</p>
<div>
<?php $rectangle= new Rectangle(12,12)?>
<p>Le périmetre de ce rectangle=<?= $rectangle->calculerPerimetre()?> cm</p>
<p>La surface de ce rectangle=<?= $rectangle->calculerSurface()?> cm²</p>
<p>
<?php 
if ($rectangle->estUnLosange()) {
    echo "Le rectangle est un losange.";
} else {
    echo "Le rectangle n'est pas un losange.";
}
?></p>
</div>
<div class="voiture">
    <?php
echo $voiture->afficherDetails()
    ?>
</div>
</body>
</html>