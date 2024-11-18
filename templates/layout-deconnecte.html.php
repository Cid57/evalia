<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <!-- Google Fonts (Roboto) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">

    <title>Evalia</title>

    <!-- Liens vers le CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body id="Home">
    <!-- Bouton de remontée en haut de la page -->
    <a href="#Home" class="top-button" title="Retour en haut">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </a>
    <!-- Navbar pour les utilisateurs non connectés -->
    <?php
    // Vérifiez si l'utilisateur est connecté
    if (!isset($_SESSION['utilisateur_id'])): ?>
        <!-- Navbar pour les utilisateurs non connectés -->
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
                        <li class="nav-item"><a class="nav-link" href="index.php?page=connexion">Se connecter</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=inscription">S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>



    <!-- Dans layout-deconnecte.html.php -->
    <?php if (!empty($chemin) && file_exists($chemin)): ?>
        <?php include $chemin; ?>
    <?php else: ?>
        <p>Le contenu demandé est introuvable.</p>
    <?php endif; ?>


    <!-- Footer -->
    <footer class="footer ">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="assets/img/logo.png" alt="Logo Evalia" class="footer-logo">
                    <p>La sécurité en hauteur à votre portée</p>
                </div>
                <div class="col-md-4">
                    <h5>Informations</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone"></i> +352 26 89 79 35</li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:formations@evalia.lu" style="color: inherit; text-decoration: none">formations@evalia.lu</a>
                        </li>
                        <li>12 Rue Kneppchen, Helperknapp, Luxembourg</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>À propos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Plan d'accès</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-4 pt-4 border-top">
                <ul class="footer-links list-inline text-center">
                    <li class="list-inline-item"><a href="index.php?page=contact">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Mentions légales</a></li>
                    <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                    <li class="list-inline-item"><a href="#">Conditions générales</a></li>
                </ul>
                <p class="text-center mb-0">© 2024 Evalia. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
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

        document
            .querySelector(".top-button")
            .addEventListener("click", function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
    </script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>