<?php
// Démarrer la session si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$error = ''; // Initialiser la variable pour les erreurs

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        // Vérifier si l'email existe déjà dans la base de données
        $query = $dbh->prepare("SELECT COUNT(*) FROM evalia_utilisateur WHERE email = :email");
        $query->bindParam(':email', $email);
        $query->execute();
        $emailExists = $query->fetchColumn();

        if ($emailExists) {
            $error = "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = $dbh->prepare("INSERT INTO evalia_utilisateur (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)");
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom);
            $query->bindParam(':email', $email);
            $query->bindParam(':mot_de_passe', $hashed_password);

            if ($query->execute()) {
                header('Location: index.php?page=connexion');
                exit;
            } else {
                $error = "Une erreur est survenue lors de l'inscription.";
            }
        }
    } else {
        $error = "Les mots de passe ne correspondent pas.";
    }
}

// Inclut le fichier de template HTML
$chemin = "../templates/inscription.html.php";
include $chemin;
