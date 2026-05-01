<?php

$host = "localhost";
$dbname = "carnet_sante";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Affiche les erreurs SQL (très utile en développement)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

?>