<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'evalia_db';

try {
    $dbh = new PDO(
        "mysql:host=$host;dbname=$dbName",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
    die;
}
