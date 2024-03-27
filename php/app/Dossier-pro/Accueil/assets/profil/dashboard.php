<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["username"])) {
    header("location: connexion.php");
    exit;
}

// Vérifier si le paramètre GET 'inscription' est défini
if (isset($_GET['inscription']) && $_GET['inscription'] == 'success') {
    echo "Inscription réussie!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon Espace</title>
</head>
<body>
    <h2>Tableau de bord</h2>
    <!-- Votre contenu de tableau de bord ici -->
</body>
</html>
