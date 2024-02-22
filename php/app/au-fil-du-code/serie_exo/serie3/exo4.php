<?php 
$individu1 = array(
    'Nom'=> 'Dupond',
    'Prenom'=> 'Martin',
    'Age'=> 18,
    'Nationalité'=> 'French'
);
$individu2 = array(
    'Nom'=> 'Duo',
    'Prenom'=> 'Marcelin',
    'Age'=> 18,
    'Nationalité'=> 'French'
);
$individu3 = array(
    'Nom'=> 'Bob',
    'Prenom'=> 'Marley',
    'Age'=> 48,
    'Nationalité'=> 'Jamaïcan'
);

$individus = array($individu1,$individu2,$individu3)
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
        foreach($individus as $key=>$personne){?>
      
    <h1><?=$key?>:<?=$personne['Nom']?> <?=$personne['Prenom']?> <?=$personne['Age']?> <?=$personne['Nationalité']?></h1>
    <ul>
    <?
    foreach($personne as $cle =>$valeur){?>
         <li><?=$cle?>|<?=$valeur?></li> 
         <?
    }?>
        </ul>
<?php 
} ?>
</ul>
</body>
</html>