<?php
require_once 'bibliotheque.php';

$monLivre = new Livre('Les Misérables', 1862, 03-04-1862, 'ISBN: 978-2-253-06545-8', "'Les Misérables' est un roman de Victor Hugo qui raconte l'histoire de plusieurs personnages, principalement Jean Valjean, un ancien bagnard qui cherche à se racheter après avoir été libéré sous la surveillance du redoutable inspecteur Javert. L'intrigue explore les thèmes de la justice, de la rédemption, de l/'amour et de la révolution sociale, se déroulant dans la France du 19e siècle. Le livre est divisé en cinq volumes et est largement considéré comme l'un des plus grands romans de la littérature française.");
$genreLivre = new Genre('roman historique');
$paysAuteur = new Pays ('France');
$unAuteur = new Auteur('Victor','Hugo','26 février 1802','22 mai 1885');
$biblio = new Bibliotheque($monLivre,$unAuteur,$paysAuteur,$genreLivre)


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php return $biblio ?>
  </body>
</html>
