<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_unset();
session_destroy();
?>

<body class="fullscreen-background-2">
    <div class="deconnexion-page">
        <div class="deconnexion-container">
            <h1>Merci de votre visite !</h1>
            <p>À très bientôt sur Evalia !</p>
            <a href="index.php" class="btn-connexion">Retour à l'accueil</a>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3500); // Redirige après 5 secondes
    </script>