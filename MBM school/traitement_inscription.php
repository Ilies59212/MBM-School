<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "maboumschool";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Requête d'insertion des données
$sql = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

if (mysqli_query($conn, $sql)) {
  echo "Inscription réussie !";
} else {
  echo "Erreur lors de l'inscription : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>