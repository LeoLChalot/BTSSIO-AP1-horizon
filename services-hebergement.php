<?php
$title = "Services - Hébergement";
require_once(__DIR__ . '/includes/header.php');
// TODO require_once(__DIR__ . '/includes/aside.php');
?>


<section class="services" id="hebergement-forfaits">
    <div id="forfait-basique" class="forfait-wrapper">
        <h2>Forfait <span class="highlight">"Basique"</span></h2>
        <br>
        <p>Ce forfait est adapté aux sites web à faible trafic et propose un espace de stockage limité, une bande passante limitée et un support technique de base.</p>
        <br>
        <p><b>Tarification : </b>Ce type de forfait peut coûter entre <span class="highlight"><b>5</b></span> et <span class="highlight"><b>25 €</b></span> par mois, selon la taille du site et les services inclus.</p>
        <button class="btn-services">Prendre rendez-vous</button>
    </div>
    <div id="forfait-standart" class="forfait-wrapper">
        <h2>Forfait <span class="highlight">"Intermédiaire"</span></h2>
        <br>
        <p>Ce forfait est adapté aux sites web à moyen trafic et propose un espace de stockage et une bande passante supérieurs à ceux du forfait de base, ainsi qu'un support technique étendu.</p>
        <br>
        <p><b>Tarification : </b> pour ce type de forfait, les prix peuvent varier de <span class="highlight"><b>25</b></span> et <span class="highlight"><b>50 €</b></span> apr mois, en fonction de la taille du site et des fonctionnalités incluses.</p>
        <button class="btn-services">Prendre rendez-vous</button>
    </div>
    <div id="forfait-premium" class="forfait-wrapper">
        <h2>Forfait <span class="highlight">"Premium"</span></h2>
        <br>
        <p>Ce forfait est adapté aux sites web à fort trafic et propose un espace de stockage et une bande passante illimités, ainsi qu'un support technique de niveau expert.</p>
        <br>
        <p><b>Tarification : </b> Pour ce type de forfait haut de gamme, les prix peuvent démarrer à partir de <span class="highlight"><b>50 €</b></span> et atteindre plusieurs centaines d'euros, en fonction de la taille du site et des ressources nécessaires.</p>
        <button class="btn-services">Prendre rendez-vous</button>
    </div>
</section>




<?php
require_once(__DIR__ . '/includes/footer.php');
?>