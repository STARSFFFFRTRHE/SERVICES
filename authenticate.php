<?php
// Configurer les détails de la base de données
$host = 'localhost';
$db = 'sousgroupe1';
$user = 'root'; // Remplacez par votre nom d'utilisateur
$pass = ''; // Remplacez par votre mot de passe

// Créer une connexion à la base de données
$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection échouée: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Préparer la requête
$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Récupérer l'utilisateur
    $user = $result->fetch_assoc();

    // Vérifier le mot de passe
    if (password_verify($password, $user['password'])) {
        // Authentification réussie
        echo "Bienvenue, " . $user['username'] . "!";
    } else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Aucun utilisateur trouvé avec ce nom d'utilisateur.";
}

$stmt->close();
$conn->close();
?>
