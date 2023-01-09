<?php
$servername = "localhost";
$dbname = "horizon";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion ok";
    $conn->beginTransaction();
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Erreur : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horizon - <?= $title; ?></title>
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <meta name="description" content="Développement Agence Web Projet AP1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header id="body-header">
        <h1 id="title"><a href="index.php"><span class="highlight">Horizon</span> Dev Web</a></h1>
        <div id="btn-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="nav-large">
            <a href="index.php">Home</a>
            <a href="about.php" title="Notre entreprise">About</a>
            <a href="services.php" title="Nos offres">Services</a>
            <a href="contact.php" title="Contactez-nous !">Contact</a>
        </nav>
    </header>

    <main <?php if ($title == "home") : ?> style="background: url('assets/images/home-bg.jpg');" <?php endif; ?>>