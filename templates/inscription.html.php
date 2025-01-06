<div class="d-flex align-items-center justify-content-center min-vh-100" style="padding-top: 5rem;">
    <div class="registration-card shadow-lg border-0 rounded-3" style="width: 90%; max-width: 1100px;">
        <!-- Section d'information -->
        <div class="info-section p-4 bg-primary text-white d-flex flex-column justify-content-center" style="width: 50%;">
            <div class="section-titre">
                <h2 class="mb-3 text-center">Formulaire d'inscription</h2>
                <p class="text-center">
                    Inscrivez-vous pour découvrir toutes nos formations en sécurité et développez vos compétences professionnelles.
                    Rejoignez-nous pour accéder à des ressources exclusives et bien plus encore.
                </p>
            </div>
        </div>

        <!-- Formulaire d'inscription -->
        <div class="formulaire-inscription p-4" style="width: 50%;">
            <h2 class="text-center mb-4">Bienvenue sur Evalia !</h2>

            <form method="post" action="index.php?page=inscription" novalidate>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input
                        type="text"
                        class="form-control <?= !empty($errors['nom']) ? 'is-invalid' : ''; ?>"
                        name="nom"
                        id="nom"
                        placeholder="Entrez votre nom"
                        value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
                        required>
                    <div class="invalid-feedback">
                        <?= $errors['nom'] ?? 'Veuillez entrer votre nom.'; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input
                        type="text"
                        class="form-control <?= !empty($errors['prenom']) ? 'is-invalid' : ''; ?>"
                        name="prenom"
                        id="prenom"
                        placeholder="Entrez votre prénom"
                        value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>"
                        required>
                    <div class="invalid-feedback">
                        <?= $errors['prenom'] ?? 'Veuillez entrer votre prénom.'; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input
                        type="email"
                        class="form-control <?= !empty($errors['email']) ? 'is-invalid' : ''; ?>"
                        name="email"
                        id="email"
                        placeholder="Entrez votre email"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        required>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?? 'Veuillez entrer une adresse email valide.'; ?>
                    </div>
                    <?php if (!empty($errors['general'])): ?>
                        <div class="alert alert-danger text-center mt-2">
                            <?= htmlspecialchars($errors['general']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input
                        type="password"
                        class="form-control <?= !empty($errors['password']) ? 'is-invalid' : ''; ?>"
                        name="password"
                        id="password"
                        placeholder="Créez un mot de passe"
                        required>
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?? 'Veuillez entrer un mot de passe.'; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Confirmez le mot de passe :</label>
                    <input
                        type="password"
                        class="form-control <?= !empty($errors['password_confirm']) ? 'is-invalid' : ''; ?>"
                        name="password_confirm"
                        id="password_confirm"
                        placeholder="Confirmez votre mot de passe"
                        required>
                    <div class="invalid-feedback">
                        <?= $errors['password_confirm'] ?? 'Les mots de passe doivent correspondre.'; ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            </form>

            <div class="text-center mt-3">
                <p>Déjà inscrit ? <a href="index.php?page=connexion" class="text-primary">Connectez-vous ici</a></p>
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

<script>
    // Validation des champs avec Bootstrap
    (function() {
        'use strict'

        // Sélectionne tous les formulaires pour appliquer la validation
        var forms = document.querySelectorAll('form')

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    // Validation des mots de passe
    document.getElementById("password_confirm").addEventListener("input", function() {
        const password = document.getElementById("password").value;
        const passwordConfirm = this.value;

        if (password !== passwordConfirm) {
            this.setCustomValidity("Les mots de passe ne correspondent pas.");
        } else {
            this.setCustomValidity("");
        }
    });
</script>