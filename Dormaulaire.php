<?php
require_once 'config.php';

// Récupérer les données soumises par l'utilisateur
$usernam = $_POST['Nom'];
$username1 = "Prenom";
$date = $_POST['Date_de_Naissance'];
$password = $_POST['Mot_de_passe'];

// Créer une requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO contacts (nom, Prenom, Date_de_Naissance, Mot_de_passe,) VALUES ('$nom', '$email', '$message')";

// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Votre message a été envoyé avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
