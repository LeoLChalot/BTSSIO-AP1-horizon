<?php
$id = $_GET['id'];
$forfait = $_GET['forfaits'];
$title = "Services - Développement";
require_once(__DIR__ . '/includes/header.php');
?>
<section class="services" id="developpement-forfaits">
    <?php
    
    $sth = $conn->prepare("SELECT * FROM forfait WHERE id_service = $id");
    $sth->execute();
    $fetch_result = $sth->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($fetch_result);
    for ($i = 0; $i < count($fetch_result); $i++):
    ?>
        <div class="forfait-wrapper">
            <h2><span class="highlight"><?= $fetch_result[$i]['name']; ?></span></h2>
            <br>
            <?= $fetch_result[$i]['description']; ?>
            <p>Tarifs compris entre <?= $fetch_result[$i]['prix_min'] ?> et <?= $fetch_result[$i]['prix_max'] ?> €</p>
            <button class="btn-services">Prendre rendez-vous</button>
        </div>
    <?php endfor; ?>
</section>
<?php
require_once(__DIR__ . '/includes/footer.php');
?>
