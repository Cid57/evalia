<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evalia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body id="Home">
    <!-- Bouton de remontée en haut de la page -->
    <a href="#Home" class="top-button" title="Retour en haut">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=accueil">
                <img src="assets/img/logo.png" alt="Logo Evalia" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=about">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=formations">Formations</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>

                    <!-- Afficher les liens en fonction de l'état de connexion -->
                    <?php if (isset($_SESSION['utilisateur_id'])): ?>
                        <!-- Lien de déconnexion si l'utilisateur est connecté -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=deconnexion">Déconnexion</a>
                        </li>
                    <?php else: ?>
                        <!-- Lien de connexion et inscription si l'utilisateur n'est pas connecté -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=connexion">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=inscription">S'inscrire</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- layout-connecte.html.php ou layout-deconnecte.html.php -->
    <?php if (!empty($chemin) && file_exists($chemin)): ?>
        <?php include $chemin; ?>
    <?php else: ?>
        <p>Contenu introuvable.</p>
    <?php endif; ?>




    <script>
        // Ajoute la classe "scrolled" lorsque la page est défilée
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        document.querySelector(".top-button").addEventListener("click", function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>