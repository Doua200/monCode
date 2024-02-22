<?php
$tableauNombre= [0,1,2,3,4,5,6];
// la somme des valeurs du tableau
$somme=0;
for($i=0; $i< count($tableauNombre); $i++){
      $somme += $tableauNombre[$i];
}


// la moyenne des valeurs du tableau

$moyenne=0;
$moyenne = $somme/count($tableauNombre);

for($i=0; $i< count($tableauNombre); $i++){
    $ecart += abs($moyenne-$tableauNombre[$i]);
}
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
    
    // echo "le résultat de la somme est "   .  $somme;
    // echo "la moyenne est "   .  $moyenne;
    ?>
    <p>le résultat de la somme est <?=$somme?> </p>
    <p>La moyenne est <?=$moyenne?> </p>
    <p>L'ecart-type est <?=$ecart?> </p>
</body>
</html>