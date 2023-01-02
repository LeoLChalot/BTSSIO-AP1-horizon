<?php
$title = "services";
require_once(__DIR__ . '/includes/header.php');
// TODO require_once(__DIR__ . '/includes/aside.php');
?>
<section id="services">
    <h2>Notre <span class="highlight">savoir-faire</span> à votre <span class="highlight">service</span></h2>
    <br>
    <p>Nous proposons des <span class="highlight">services</span> de développement web de <span class="highlight">qualité</span> pour aider les entreprises à créer des sites web <span class="highlight">professionnels</span> et <span class="highlight">performants</span>. Nous offrons également un service de <span class="highlight">maintenance</span> pour assurer le bon fonctionnement de vos sites web et résoudre tous les problèmes éventuels qui pourraient survenir. Enfin, nous proposons également des solutions d'<span class="highlight">hébergement</span> pour vous aider à trouver le meilleur endroit pour héberger votre site web en fonction de vos besoins et de votre budget. Nous sommes impatients de vous aider à atteindre vos objectifs en ligne.</p>
</section>

<section class="card-container">
    <div class="card" id="bg-developpement-front">
        <div class="front">
            <div class="card-content">
                <!-- Contenu de la face avant de la carte -->
                <p>Développement Web</p>
            </div>
        </div>
        <div class="back">
            <div class="card-content">
                <!-- Contenu de la face arrière de la carte -->
                <a class="card-link" href="services-developpement.php">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="card" id="bg-maintenance-front">
        <div class="front">
            <div class="card-content">
                <!-- Contenu de la face avant de la carte -->
                <p>Maintenance</p>
            </div>
        </div>
        <div class="back">
            <div class="card-content">
                <!-- Contenu de la face arrière de la carte -->
                <a class="card-link" href="services-maintenance.php">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="card" id="bg-hebergement-front">
        <div class="front">
            <div class="card-content">
                <!-- Contenu de la face avant de la carte -->
                <p>Hébergement</p>
            </div>
        </div>
        <div class="back">
            <div class="card-content">
                <!-- Contenu de la face arrière de la carte -->
                <a class="card-link" href="services-hebergement.php">En savoir plus</a>
            </div>
        </div>
    </div>
</section>



<?php
require_once(__DIR__ . '/includes/footer.php');
?>