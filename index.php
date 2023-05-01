<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form>
     
    <h1>Se connecter</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    
    <div class="inputs">
      <input type="text" placeholder="Nom" />
      <input type="text" placeholder="Prenom">
      <input type="date" placeholder="Date de naissance" />
      <input type="password" placeholder="Mot de passe">
    </div>
    
    <p class="inscription">Je n'ai pas de <span>compte</span>. Je m'en <span>crée</span> un.</p>
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
  </form>

  <?php
$servername = "localhost";
$username = "Nom";
$username1 = "Prenom";
$date = "Date_de_Naissance";
$password = "Mot_de_passe";
$dbname = "razak";

// Créer une connexion
$conn = new mysqli($servername, $username,$username1, $password, $dbname,$date,);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

</body>
</html>