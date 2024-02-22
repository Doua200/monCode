<?php
$tableau[0]=2023;
$tableau[1]="DEVWEB-18-S2";
$tableau[2]=11.12;

$tab[0][0]=12;
$tab[0][1]="tv";
$tab[1][0]=1245.678;
$tab[1][1]="bye";

$toto["Nom"]="le nom de famille de Toto";
$toto["Age"]="12";
$toto["Adresse"]="22 rue des bois fleuri";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // print_r($tableau);
    echo $tableau[1];
    echo$tableau[0];
    echo $tableau[1];
    echo $tableau[2];

    echo $tab[0][0];
    echo $tab[0][1];
    echo $tab[1][0];
    echo $tab[1][1];

    echo $toto["Nom"];
    echo $toto["Adresse"];
    ?>
</body>
</html>