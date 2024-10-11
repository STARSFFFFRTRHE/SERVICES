<?php
session_start();
$host = 'localhost'; // ou l'adresse de votre serveur
$db = 'sousgroupe1';
$user = 'root'; // votre utilisateur MySQL
$pass = ''; // votre mot de passe MySQL

// Créer une connexion
$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Rechercher l'utilisateur dans la base de données
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    // Vérifier si l'utilisateur existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Vérifier le mot de passe
        if (password_verify($password, $hashed_password)) {
            // Authentification réussie
            $_SESSION['user_id'] = $id;
            header("Location: welcome.html"); // Redirigez vers une page HTML
            exit();
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }

    if ($passwordEstCorrect) {
        // Démarrer la session si ce n'est pas déjà fait
        session_start();
        
        // Vous pouvez stocker des informations de session si nécessaire
        $_SESSION['username'] = $username; // Exemple
    
        // Rediriger vers la nouvelle page
        header("Location: re.html");
        exit(); // Terminer le script pour s'assurer qu'aucun code ultérieur n'est exécuté
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    $stmt->close();
}



$conn->close();
?>
