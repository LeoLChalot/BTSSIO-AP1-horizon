<?php
$title = "Services";
require_once(__DIR__ . '/includes/header.php');
?>
<section id="services">
    <h2>Notre <span class="highlight">savoir-faire</span> à votre <span class="highlight">service</span></h2>
    <br>
    <p>Nous proposons des <span class="highlight">services</span> de développement web de <span class="highlight">qualité</span> pour aider les entreprises à créer des sites web <span class="highlight">professionnels</span> et <span class="highlight">performants</span>. Nous offrons également un service de <span class="highlight">maintenance</span> pour assurer le bon fonctionnement de vos sites web et résoudre tous les problèmes éventuels qui pourraient survenir. Enfin, nous proposons également des solutions d'<span class="highlight">hébergement</span> pour vous aider à trouver le meilleur endroit pour héberger votre site web en fonction de vos besoins et de votre budget. Nous sommes impatients de vous aider à atteindre vos objectifs en ligne.</p>
</section>
<section class="card-container">
<?php
    $sth = $conn->prepare("SELECT * FROM services");
    $sth->execute();
    $fetch_result = $sth->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($fetch_result);
    for ($i = 0; $i < count($fetch_result); $i++):
    ?>
    <div class="card" id="bg-<?= $fetch_result[$i]['id'];?>-front">
        <div class="front">
            <div class="card-content">
                <!-- Contenu de la face avant de la carte -->
                <p><?= $fetch_result[$i]['name_services'];?></p>
            </div>
        </div>
        <div class="back">
            <div class="card-content">
                <!-- Contenu de la face arrière de la carte -->
                <a class="card-link" href="<?= $fetch_result[$i]['services_url'];?>">En savoir plus</a>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</section>
<?php
require_once(__DIR__ . '/includes/footer.php');
?>