<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horizon - <?= $title; ?></title>
    <meta name="description" content="Développement Agence Web Projet AP1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header id="body-header">
        <h1 id="title"><span class="highlight">Horizon</span> Dev Web</h1>
        <!-- <p><?= $title; ?></p> -->
        <details id="nav-small">
            <summary>Menu</summary>
            <nav>
                <a href="index.php">Home</a>
                <a href="about.php" title="Notre entreprise">About</a>
                <a href="services.php" title="Nos offres">Services</a>
                <a href="contact.php" title="Contactez-nous !">Contact</a>
            </nav>
        </details>
        <nav id="nav-large">
            <a href="index.php">Home</a>
            <a href="about.php" title="Notre entreprise">About</a>
            <a href="services.php" title="Nos offres">Services</a>
            <a href="contact.php" title="Contactez-nous !">Contact</a>
        </nav>
    </header>
    <main 
    <?php if($title == "home"): ?>
    style="background: #35424A url('assets/images/<?= $title ;?>.jpg');"
    <?php endif; ?>
    >
    