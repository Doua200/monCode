<?php
header("location: dashboard.php?inscription=success");


// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Enregistrer les données dans une base de données (ou un fichier, selon votre système de stockage)
    // Exemple de connexion à une base de données MySQL :
    $servername = "localhost";
    $db_username = "votre_nom_utilisateur";
    $db_password = "votre_mot_de_passe";
    $dbname = "votre_base_de_donnees";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    
    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Préparer et exécuter la requête SQL
    $sql = "INSERT INTO utilisateurs (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
