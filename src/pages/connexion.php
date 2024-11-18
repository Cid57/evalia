<?php
// Assurez-vous de démarrer la session si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour récupérer l'utilisateur en fonction de l'email
    $query = $dbh->prepare("SELECT * FROM utilisateur WHERE email = :email");
    $query->bindParam(':email', $email);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        // Si le mot de passe est correct, démarrer la session utilisateur
        $_SESSION['utilisateur_id'] = $user['id_utilisateur'];
        header("Location: index.php?page=accueil");
        exit;
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}

// Inclure le fichier HTML pour l'affichage
$chemin = "../templates/connexion.html.php";
include $chemin;
