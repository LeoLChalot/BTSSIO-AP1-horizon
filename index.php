<?php
$title = "home";
require_once(__DIR__ . '/includes/header.php');
?>
<section id="index-main-header">
    <div id="index-main-header-home">
        <h1 id="index-main-title">
            Sites Web <span class="highlight">professionnels</span>, et <span class="highlight">accessibles</span> !
        </h1>
        <img id="logo-home" src="assets/images/logo2.png" alt="logo entreprise">
        <p>Des prestations de qualité pour un horizons de possibilités...</p>
    </div>
</section>
<section id="index-newsletter">
    <p>Restez informés avec notre Newsletter !</p>
    <form action="#">
        <input type="mail" placeholder="Entrez votre mail...">
        <input type="submit" value="Je reste informé !">
    </form>
</section>
<section id="index-worklist">
    <div class="work-card">
        <a href="services-developpement.php"><img class="img-worklist" src="assets/images/logo2.png" alt="img prestation"></a>
        <h3>Développement Web</h3>
        <p>Notre entreprise offre des services de développement web de qualité pour aider les entreprises à atteindre leurs objectifs en ligne.</p>
    </div>
    <div class="work-card">
        <a href="services-maintenance.php"><img class="img-worklist" src="assets/images/logo2.png" alt="img prestation"></a>
        <h3>Maintenance</h3>
        <p>Notre entreprise offre des services de maintenance web pour assurer la pérennité de votre site ou application. Nous nous occupons des mises à jour, des corrections de bugs et des améliorations pour garantir le bon fonctionnement de votre projet en ligne.</p>
    </div>
    <div class="work-card">
    <a href="services-hebergement.php"><img class="img-worklist" src="assets/images/logo2.png" alt="img prestation"></a>
        <h3>Hébergement</h3>
        <p>Notre entreprise offre des services d'hébergement web fiables et sécurisés pour votre site ou application. Nous proposons différentes options d'hébergement adaptées à vos besoins et à votre budget.</p>
    </div>
</section>


<?php
require_once(__DIR__ . '/includes/footer.php');
?>