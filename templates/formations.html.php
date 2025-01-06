<!-- templates/accueil.html.php -->
<section>

    <p>Découvrez nos formations :</p>

    <?php if (!empty($formations)): ?>
        <ul>
            <?php foreach ($formations as $formation): ?>
                <li>
                    <h2><?= htmlspecialchars($formation['titre']) ?></h2>
                    <p><?= htmlspecialchars($formation['description']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune formation disponible pour le moment.</p>
    <?php endif; ?>
</section>