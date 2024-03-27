<?php
require_once 'bibliotheque.php';

// Création des livres
// $livre1 = new Livre(
//     'Les Misérables',
//     1862,
//     '1862-03-04',
//     'ISBN: 978-2-253-06545-8',
//     "'Les Misérables' est un roman de Victor Hugo qui raconte l'histoire de plusieurs personnages, principalement Jean Valjean, un ancien bagnard qui cherche à se racheter après avoir été libéré sous la surveillance du redoutable inspecteur Javert. L'intrigue explore les thèmes de la justice, de la rédemption, de l'amour et de la révolution sociale, se déroulant dans la France du 19e siècle. Le livre est divisé en cinq volumes et est largement considéré comme l'un des plus grands romans de la littérature française."
// );

// $livre2 = new Livre(
//     "Harry Potter à l'école des sorciers",
//     1997,
//     '1997-06-26',
//     'ISBN:978-2-07-058462-8',
//     "Harry Potter à l'école des sorciers raconte l'histoire d'un jeune garçon nommé Harry Potter, qui découvre qu'il est en réalité un sorcier."
// );
$livre = new Livre("Les Misérables", 1862, "1862-03-04", "ISBN: 978-2-253-06545-8", "Roman historique");

// Création des auteurs
$auteur1 = new Auteur('Victor', 'Hugo', '1802-02-26', '1885-05-22');
$auteur2 = new Auteur('J.K.', 'Rowling', '1965-07-31', '');

// Création des genres
$genre1 = new Genre('roman historique');
$genre2 = new Genre("Fantasy");

// Création des pays
$pays1 = new Pays('France');
$pays2 = new Pays('Royaume-Uni');

// Création de la bibliothèque
$biblio = new Bibliotheque();

// Ajout des livres à la bibliothèque
$biblio->ajouterLivre($livre1);
$biblio->ajouterLivre($livre2);

// Ajout des auteurs à la bibliothèque
$biblio->ajouterAuteur($auteur1);
$biblio->ajouterAuteur($auteur2);

// Ajout des genres à la bibliothèque
$biblio->ajouterGenre($genre1);
$biblio->ajouterGenre($genre2);

// Ajout des pays à la bibliothèque
$biblio->ajouterPays($pays1);
$biblio->ajouterPays($pays2);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Bibliothèque</title>
</head>
<body>
<h1>Ma Bibliothèque</h1>
<?= $biblio->afficher() ?>
</body>
</html>
