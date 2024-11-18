<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card d-flex flex-row mt-5" style="max-width: 900px; border: none; ">
        <!-- Section d'information -->
        <div class="info-section">
            <h2>Formulaire d'inscription</h2>
            <p>
                Inscrivez-vous pour découvrir toutes nos formations en sécurité et développez vos compétences professionnelles.
                Rejoignez-nous pour accéder à des ressources exclusives et bien plus encore.
            </p>
        </div>
        <!-- Formulaire d'inscription -->
        <div class="formulaire-inscription w-60 p-4">
            <h2 class="login-title2 text-center mb-4">Bienvenue sur Evalia !</h2>

            <form method="post" action="">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prénom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email">
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger text-center text-black">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Créez un mot de passe" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Confirmez le mot de passe :</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Confirmez votre mot de passe" required>
                </div>
                <button type="submit" class="btn btn-inscription w-100">S'inscrire</button>
            </form>

            <div class="text-center mt-3">
                <p class="mb-0">Déjà inscrit ? <a href="index.php?page=connexion">Connectez-vous ici</a></p>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="footer">
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
</div>