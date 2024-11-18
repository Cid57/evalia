<div class="fullscreen-background-2"></div>

<main class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="login-container">
        <h2 class="login-title">Connexion</h2>

        <!-- Affichage du message d'erreur -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <!-- Formulaire de connexion -->
        <form method="post" action="index.php?page=connexion">
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <button type="submit" class="btn btn-connexion w-100">Se connecter</button>
        </form>

        <!-- Lien vers l'inscription -->
        <div class="text-center mt-3">
            <p>Pas encore de compte ? <a href="index.php?page=inscription" class="text-primary">Inscrivez-vous ici</a></p>
        </div>
    </div>
</main>