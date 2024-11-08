<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "cindy_singer913@msn.com";
    $subject = "Nouveau message de contact";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi.";
    }
}
