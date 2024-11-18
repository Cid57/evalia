<?php
// Démarre la session si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Récupère la page demandée ou utilise "accueil" par défaut
$page = filter_var($_GET['page'] ?? 'accueil', FILTER_SANITIZE_SPECIAL_CHARS);

// Définition des chemins pour les fichiers nécessaires
$chemin = "../src/pages/$page.php"; // Chemin pour le contenu spécifique de la page
$layoutPath = "../templates/"; // Chemin pour les layouts
$dataConnectPath = "../src/data/data-connect.php"; // Chemin pour la connexion à la base de données



// Pages qui nécessitent un layout deconnexion (ex. connexion, mdp-reset)
$pagesDeConnexion = ['connexion', 'mdp-reset', 'reset_password'];

// Vérifie si l'utilisateur est connecté
$isConnected = isset($_SESSION['utilisateur_id']);

// Choisit le layout en fonction de l'état de connexion
$layout = ($isConnected || !in_array($page, $pagesDeConnexion)) ? 'layout-connecte' : 'layout-deconnecte';

// Inclut le fichier de connexion à la base de données
if (file_exists($dataConnectPath)) {
    require_once $dataConnectPath;
} else {
    die("Erreur : Fichier de connexion à la base de données non trouvé.");
}

// Vérifie si le fichier de contenu de la page demandée existe
if (file_exists($chemin)) {
    // Inclut le layout approprié qui contiendra également le contenu de la page
    include "{$layoutPath}{$layout}.html.php";
} else {
    // Si le fichier de la page n'existe pas, renvoie une erreur 404
    header('HTTP/1.1 404 Not Found');
    include "{$layoutPath}404.html.php"; // Charge la page d'erreur 404
    exit;
}
